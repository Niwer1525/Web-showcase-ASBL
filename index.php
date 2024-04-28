<!DOCTYPE html>
<html lang="fr">
    <?php
        $title = 'Accueil';
        require_once("./inc/header.inc.php");
    ?>
    <body>
        <header class="mainHeader">
            <nav>
                <img src="./images/logo.png" alt="Logo">
                <!-- The first (main) navigation -->
                <ul>
                    <li><a href="./team.php">Notre équipe</a></li>
                    <li><a href="#news">Actualités</a></li>
                    <li><a href="./department.php">Départements</a></li>
                    <li><a href="./contact.php">Contact</a></li>
                    <li><a href="./identification.php">Se connecter <i class="fa fa-user"></i></a></li>
                </ul>
            </nav>
        </header>
        <main>
            <?php
                $pageName = 'index';
                require_once("./inc/nav.inc.php");
            ?>
            <!-- Separator with title section -->
            <section class="subHeader">
                <h2>DERNIERE ACTUALITES</h2>
                <hr>
            </section>
            <!-- News section -->
            <section id="news" class="news">
                <div class="cardsContainer">
                    <?php
                        require_once("./php/util.php");
                        require_once("./php/db_article.php");
                        use DB\Article;
                        use Utils\Util;

                        /* Get the datas from the database */
                        foreach (Article::getHomeArticle() as $article) {
                            echo '<article>
                                <header>
                                    <img src="./uploads/'.Util::computeNameForPath($article->nameArticle).'/'.$article->imageArticle.'" alt="Image '.strtolower($article->nameArticle).'">
                                    <h2>'.$article->nameArticle.'</h2>
                                </header>
                                <p>'.$article->introArticle.'</p>
                                <a href="./fullNews.php?id='.$article->id.'">Lire plus</a>
                                <footer>
                                    <p>'.$article->datePublicationArticle.'</p>
                                </footer>
                            </article>';
                        }
                    ?>
                </div>
                <!-- View all news container and button -->
                <div class="seeAllNews">
                    <a href="./news.php">Toute l'actualité</a>
                </div>
            </section>

            <!-- Separator with title section -->
            <section class="subHeader">
                <h2>QUI SOMMES NOUS ?</h2>
                <hr>
            </section>
            <!-- Description section -->
            <section>
                <p>Nous sommes <span>"Lumière du Savoir"</span>, une ASBL dédiée à l'éclairage des esprits des jeunes en leur offrant un accès à une bibliothèque de connaissances en ligne. Notre mission est de fournir des ressources éducatives de qualité, y compris des livres, des articles et des vidéos, pour aider les jeunes à apprendre et à grandir. Nous croyons que chaque enfant a le droit d'accéder à une éducation de qualité, et nous nous engageons à faire de cette vision une réalité. Ensemble, nous pouvons illuminer le chemin de l'apprentissage pour les générations futures.</p>
            </section>
        </main>
        <?php require_once("./inc/footer.inc.php"); ?>
    </body>
</html>