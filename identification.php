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
                    <label>Votre email : <input type="text" placeholder="john.california@gmail.com"></label>
                    <label>Mot de passe : <input type="password" placeholder="mot2pass3*"></label>
                    <button type="submit">Se connecter</button>
                </form>
            </section>
            <hr> <!-- Separator -->
            <!-- Create account section -->
            <section>
                <form>
                    <h2>Créer un compte</h2>
                    <label>Votre email : <input type="text" placeholder="john.california@gmail.com"></label>
                    <label>Votre nom : <input type="text" placeholder="John California"></label>
                    <label>Mot de passe : <input type="password" placeholder="mot2pass3*"></label>
                    <label>Age : <input type="number" placeholder="25" min="16" max="100"></label>
                    <button type="submit">Créer un compte</button>
                </form>
            </section>
        </main>
        <?php
            include("inc/footer.inc.php");
        ?>
    </body>
</html>