<!DOCTYPE html>
<html lang="fr">
    <?php
        $title = 'Profile';
        require_once("./inc/header.inc.php");
        require_once("./php/db_account.php");
        use DB\User;
        
        if (isset($_GET["mode"])) {
            switch(htmlspecialchars($_GET["mode"])) {
                case "disconnect":
                    User::logout();
                    header("Location: ./");
                    break;
                case "update_infos":
                    if (isset($_GET["passwordUser"]) && isset($_GET["passwordUserConfirm"]) && htmlspecialchars($_GET["passwordUser"]) != htmlspecialchars($_GET["passwordUserConfirm"])) break;
                    break;
                }
            }
            ?>
    <body>
        <?php
            $user = unserialize($_SESSION["devweb_user"]);
            $pageName = 'profile';
            require_once("./inc/nav.inc.php");
            require_once("./php/util.php");
            use Utils\Util;
        ?>
        <main>
            <section class="subHeader">
                <h1>PROFIL DE <?php echo Util::computeNameForDisplay($user->nameUser).' '.Util::computeNameForDisplay($user->lastnameUser) ?></h1>
                <hr>
            </section>
            <section>
                <form action="./profile.php" method="get">
                    <input type="hidden" name="mode" value="disconnect"></input>
                    <button type="submit">Se déconnecter</button>
                </form>
                <hr>
                <form action="./profile.php" method="get">
                    <input type="hidden" name="mode" value="update_infos"></input>
                    <label for="nameUser">Nom</label>
                    <input type="text" name="nameUser" placeholder="Meyer" value="<?php echo $user->lastnameUser ?>"></input>

                    <label for="lastnameUser">Prénom</label>
                    <input type="text" name="lastnameUser" placeholder="Solann" value="<?php echo $user->nameUser ?>"></input>

                    <label for="ageUser">Âge</label>
                    <input type="number" name="ageUser" placeholder="25" value="<?php echo $user->ageUser ?>"></input>

                    <label for="emailUser">Email</label>
                    <input type="email" name="emailUser" placeholder="john.california@gmail.com" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" value="<?php echo $user->emailUser ?>"></input>

                    <label for="passwordUser">Mot de passe</label>
                    <input type="password" name="passwordUser" placeholder="mot2pass3*" pattern="^(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,}$" title="Le mot de passe doit contenir au moins 8 caractères et un caractère spécial"></input>

                    <label for="passwordUserConfirm">Confirmer le mot de passe</label>
                    <input type="password" name="passwordUserConfirm" placeholder="mot2pass3*" pattern="^(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,}$" title="Le mot de passe doit contenir au moins 8 caractères et un caractère spécial"></input>

                    <label for="addressUser">Adresse</label>
                    <input type="text" name="addressUser" placeholder="12 rue des lilas" value="<?php echo $user->addressUser ?>"></input>

                    <button type="submit">Mettre à jour mes informations</button>
                </form>
            </section>
        </main>
        <?php require_once("./inc/footer.inc.php"); ?>
    </body>
</html>