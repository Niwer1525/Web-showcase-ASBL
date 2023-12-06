<html lang="fr">
    <?php
        $title = 'Equipe';
        include("inc/header.inc.php");
    ?>
    <body>
        <header class="nav-bar">
            <nav>
                <ul>
                    <li><a href="./index.php">Acceuil</a></li>
                    <li><a href="./team.php">Notre équipe</a></li>
                    <li><a href="./department.php">Départements</a></li>
                    <li><a href="./contact.php" class="currentPage">Contact</a></li>
                    <li><a href="./news.php">Actualités</a></li>
                    <li>
                        <a href="./identification.php">Se connecter <i class="fa fa-user"></i></a>
                    </li>
                </ul>
            </nav>
        </header>
        <main>
            <section class="usefulLinks">
                <h2>Nous contacter</h2><hr>
                <ul>
                    <li><i class="fa fa-map"></i><span> Adresse : </span>Rue de la Science, 23 - 1040 Bruxelles</li>
                    <li><i class="fa fa-phone"></i><span> Téléphone : </span>+32 2 650 22 11</li>
                    <li><i class="fa fa-envelope"></i><span> Email : </span>contact@lumieresavoire.be</li>
                </ul>
            </section>
            <hr>
            <section>
                <form>
                    <label for="mail">E-mail</label>
                    <input type="email" id="mail" name="user_mail" placeholder="john.california@gmail.com">
                    <label for="name">Nom Prénom</label>
                    <input type="text" id="name" name="user_name" placeholder="Jhon California">
                    <label for="sujet">Sujet</label>
                    <input type="text" id="sujet" name="user_subject" placeholder="Votre sujet"></input>
                    <label for="msg">Message</label>
                    <textarea id="msg" name="user_message" placeholder="Votre message"></textarea>
                    <button type="submit">Envoyer</button>
                </form>
            </section>
        </main>
        <?php
            include("inc/footer.inc.php");
        ?>
    </body>
</html>