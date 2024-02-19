<!DOCTYPE html>
<html lang="fr">
    <?php
        $title = 'Identification';
        require("inc/header.inc.php");
    ?>
    <body>
        <?php
            $pageName = 'identification';
            require("inc/nav.inc.php");
        ?>
        <main>
            <!-- Login section -->
            <section>
                <form action="./" method="get">
                    <h2>Se connecter</h2>
                    <label for="connect_mail">Votre email :</label>
                    <input type="email" id="connect_mail" placeholder="john.california@gmail.com" required>
                    <label for="connect_password">Mot de passe :</label>
                    <input type="password" id="connect_password" placeholder="mot2pass3*" required>
                    <button type="submit">Se connecter</button>
                </form>
            </section>
            <hr> <!-- Separator -->
            <!-- Create account section -->
            <section>
                <form action="./" method="get">
                    <h2>Créer un compte</h2>
                    <label for="create_mail">Votre email :</label>
                    <input type="email" id="create_mail" placeholder="john.california@gmail.com" required>
                    <label for="create_name">Votre nom :</label>
                    <input type="text" id="create_name" placeholder="John California" required>
                    <label for="create_password">Mot de passe :</label>
                    <input type="password" id="create_password" placeholder="mot2pass3*" required>
                    <label for="create_age">Age :</label>
                    <input type="number" id="create_age" placeholder="25" min="16" max="100" required>
                    <button type="submit">Créer un compte</button>
                </form>
            </section>
        </main>
        <?php
            require("inc/footer.inc.php");
        ?>
    </body>
</html>