<!DOCTYPE html>
<html lang="fr">
    <?php
        $title = 'Identification';
        include("inc/header.inc.php");
    ?>
    <body>
        <header class="nav-bar">
            <nav>
                <ul>
                    <li><a href="./index.php">Acceuil</a></li>
                    <li><a href="./team.php">Notre équipe</a></li>
                    <li><a href="./department.php">Départements</a></li>
                    <li><a href="./contact.php">Contact</a></li>
                    <li><a href="./news.php">Actualités</a></li>
                    <li>
                        <a href="./identification.php" class="currentPage">Se connecter <i class="fa fa-user"></i></a>
                    </li>
                </ul>
            </nav>
        </header>
        <main>
            <!-- Login section -->
            <section>
                <form>
                    <h2>Se connecter</h2>
                    <label for="mail">Votre email :</label>
                    <input type="text" id="mail" placeholder="john.california@gmail.com">
                    <label for="password">Mot de passe :</label>
                    <input type="password" id="password" placeholder="mot2pass3*">
                    <button type="submit">Se connecter</button>
                </form>
            </section>
            <hr> <!-- Separator -->
            <!-- Create account section -->
            <section>
                <form>
                    <h2>Créer un compte</h2>
                    <label for="mail">Votre email :</label>
                    <input type="text" id="mail" placeholder="john.california@gmail.com">
                    <label for="name">Votre nom :</label>
                    <input type="text" id="name" placeholder="John California">
                    <label for="password">Mot de passe :</label>
                    <input type="password" id="password" placeholder="mot2pass3*">
                    <label for="age">Age :</label>
                    <input type="number" id="age" placeholder="25" min="16" max="100">
                    <button type="submit">Créer un compte</button>
                </form>
            </section>
        </main>
        <?php
            include("inc/footer.inc.php");
        ?>
    </body>
</html>