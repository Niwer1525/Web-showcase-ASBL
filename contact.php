<!DOCTYPE html>
<html lang="fr">
    <?php
        $title = 'Equipe';
        require("inc/header.inc.php");
    ?>
    <body>
        <?php
            $pageName = 'contact';
            require("inc/nav.inc.php");

            function getDefaultValue($type) {
                if(!isset($_SESSION["user"]) || !is_string($_SESSION["user"])) return "";
                $user = unserialize($_SESSION["user"]);

                echo 'value="';
                switch($type) {
                    case "user_mail":
                        echo $user->emailUser;
                        break;
                    case "user_name":
                        echo $user->nameUser . " " . $user->lastnameUser;
                        break;
                }
                echo '"';
            }
        ?>
        <main>
            <section class="usefulLinks">
                <h1>NOUS CONTACTER</h1><hr>
                <ul>
                    <li><i class="fa fa-map"></i><span> Adresse : </span>Rue de la Science, 23 - 1040 Bruxelles</li>
                    <li><i class="fa fa-phone"></i><span> Téléphone : </span>+32 2 650 22 11</li>
                    <li><i class="fa fa-envelope"></i><span> Email : </span>contact@lumieresavoire.be</li>
                </ul>
                <hr>
            </section>
            <section>
                <form action="./php/sendMail.php" method="post">
                    <label for="mail">E-mail</label>
                    <input type="email" id="mail" name="user_mail" placeholder="john.california@gmail.com" <?php getDefaultValue("user_mail") ?>>
                    <label for="name">Nom Prénom</label>
                    <input type="text" id="name" name="user_name" placeholder="Jhon California" <?php getDefaultValue("user_name") ?>>
                    <label for="sujet">Sujet</label>
                    <input type="text" id="sujet" name="user_subject" placeholder="Votre sujet">
                    <label for="msg">Message</label>
                    <textarea id="msg" name="user_message" placeholder="Votre message"></textarea>
                    <button type="submit">Envoyer le message</button>
                </form>
            </section>
        </main>
        <?php require("inc/footer.inc.php"); ?>
    </body>
</html>