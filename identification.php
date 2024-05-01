<!DOCTYPE html>
<html lang="fr">
    <?php
        $title = 'Identification';
        require_once("./inc/header.inc.php");
    ?>
    <body>
        <?php
            $pageName = 'identification';
            require_once("./inc/nav.inc.php");
            use DB\User;
            
            if (isset($_POST["email"]) && isset($_POST["password"])) {
                if (isset($_POST["name"]) && isset($_POST["age"])) {
                    $splittedName = explode(' ', $_POST["name"]); // Split the name into two parts (name and lastname) with the last space
                    $name = implode(' ', array_slice($splittedName, 0, -1));
                    $lastname = end($splittedName);

                    $user = new User();
                    $user->nameUser = $name;
                    $user->lastnameUser = $lastname;
                    $user->ageUser = htmlspecialchars($_POST["age"]);
                    $user->emailUser = htmlspecialchars($_POST["email"]);
                    $user->passwordUser = htmlspecialchars($_POST["password"]);
                    $user->addressUser = "";
                    User::createUser($user->nameUser, $user->lastnameUser, $user->ageUser, $user->emailUser, $user->passwordUser, $user->addressUser);
                    $_SESSION["temp_user"] = $user;
                } else {
                    $logged = User::login(htmlspecialchars($_POST["email"]), htmlspecialchars($_POST["password"]));
                    if ($logged != NULL) {
                        $_SESSION["devweb_user"] = serialize($logged);
                        header("Location: ./");
                    }
                }
            }
        ?>
        <main>
            <!-- Login section -->
            <section>
                <form action="./identification.php" method="post">
                    <h2>Se connecter</h2>
                    <label for="connect_mail">Votre email :<span class="required">*</span></label>
                    <input type="email" id="connect_mail" name="email" placeholder="john.california@gmail.com" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" required <?php echo'value="'.User::getTempEmail().'"'?>>
                    <label for="connect_password">Mot de passe :<span class="required">*</span></label>
                    <input type="password" id="connect_password" name="password" placeholder="mot2pass3*" required <?php echo'value="'.User::getTempPassword().'"'?>>
                    <button type="submit">Se connecter</button>
                </form>
            </section>
            <hr> <!-- Separator -->
            <!-- Create account section -->
            <section>
                <form action="./identification.php" method="post">
                    <h2>Créer un compte</h2>
                    <label for="create_mail">Votre email :<span class="required">*</span></label>
                    <input type="email" id="create_mail" name="email" placeholder="john.california@gmail.com" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" required>
                    <label for="create_name">Votre nom :<span class="required">*</span></label>
                    <input type="text" id="create_name" name="name" placeholder="John California" required>
                    <label for="create_password">Mot de passe :<span class="required">*</span></label>
                    <input type="password" id="create_password" name="password" placeholder="mot2pass3*" pattern="^(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,}$" title="Le mot de passe doit contenir au moins 8 caractères et un caractère spécial" required>
                    <label for="create_age">Âge :<span class="required">*</span></label>
                    <input type="number" id="create_age" name="age" placeholder="25" min="16" max="100" required>
                    <button type="submit">Créer un compte</button>
                </form>
            </section>
        </main>
        <?php require_once("./inc/footer.inc.php"); ?>
    </body>
</html>