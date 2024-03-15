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
            if(isset($_POST["user_mail"]) && isset($_POST["user_name"]) && isset($_POST["user_subject"]) && isset($_POST["user_message"])) {
                $user_mail = filter_input(INPUT_POST, 'user_mail', FILTER_VALIDATE_EMAIL);
                $user_name = filter_input(INPUT_POST, 'user_name', FILTER_SANITIZE_STRING);
                $user_subject = filter_input(INPUT_POST, 'user_subject', FILTER_SANITIZE_STRING);
                $user_message = filter_input(INPUT_POST, 'user_message', FILTER_SANITIZE_STRING);
            
                if ($user_mail && $user_name && $user_subject && $user_message) {
                    $to = "e.redote@student.helmo.be";
                    $headers = "From: " . $user_mail;
            
                    /* Send the mail to the administrator */
                    mail($to, $user_subject, $user_message, $headers);
            
                    /* Send a copy of the mail to the user */
                    mail($user_mail, $user_subject, $user_message, $headers);

                    /* Send back to the main page */
                    header("Location: ./");
                }
            }
        ?>
        <main>
            <!-- Links that may be usefull for the user -->
            <section class="usefulLinks">
                <h1>NOUS CONTACTER</h1><hr>
                <ul>
                    <li><i class="fa fa-map"></i><span> Adresse : </span>Rue de la Science, 23 - 1040 Bruxelles</li>
                    <li><i class="fa fa-phone"></i><span> Téléphone : </span>+32 2 650 22 11</li>
                    <li><i class="fa fa-envelope"></i><span> Email : </span>contact@lumieresavoire.be</li>
                </ul>
                <hr>
            </section>
            <!-- Contact form -->
            <section>
                <form action="./contact.php" method="post">
                    <label for="mail">E-mail</label>
                    <input type="email" id="mail" name="user_mail" placeholder="john.california@gmail.com" <?php getDefaultValue("user_mail") ?> required>
                    <label for="name">Nom Prénom</label>
                    <input type="text" id="name" name="user_name" placeholder="Jhon California" <?php getDefaultValue("user_name") ?> required>
                    <label for="subject">Sujet</label>
                    <input type="text" id="subject" name="user_subject" placeholder="Votre sujet" required>
                    <label for="msg">Message</label>
                    <textarea id="msg" name="user_message" placeholder="Votre message" required></textarea>
                    <button type="submit">Envoyer le message</button>
                </form>
            </section>
            <!-- FAQ -->
            <section>
                <hr><br><br>
                <div class="cardsContainer">
                    <article class="faq">
                        <h2>Foire aux questions (FAQ)</h2>
                        <?php 
                            require_once("./php/db_faq.php");
                            use DB\FaqQuestion;

                            foreach(FaqQuestion::getFaqQuestions() as $question) {
                                echo '<details>';
                                echo '<summary>' . $question->question . '</summary>';
                                echo '<p>' . $question->reply . '</p>';
                                echo '</details>';
                            }
                        ?>
                    </article>
                </div>
            </section>
        </main>
        <?php require("inc/footer.inc.php"); ?>
    </body>
</html>