<!DOCTYPE html>
<html lang="fr">
    <?php
        $title = 'Article 1';
        require("inc/header.inc.php");
    ?>
    <body>
        <header class="nav-bar">
            <nav>
                <ul><li><a href="./news.php">Retour</a></li></ul>
            </nav>
        </header>
        <main>
            <section>
                <div class="cardsContainer">
                    <?php
                        require("./php/db_article.php");
                        use DB\Article;
                        $article = Article::getArticle($_GET['name']);

                        echo '<article class="largeArticle">
                        <header>
                            <img src="./images/article1.jpg" alt="Image article 1">
                            <h3>'.$article->nameArticle.'</h3>
                        </header>
                        <p>'.$article->contentArticle.'</p>
                        <footer>';
                        if(isset($_SESSION["user"])) {
                            echo'<a class="adminButton" href="./update.php?type=news&mode=edition&name='.$article->nameArticle.'"><i class="fa fa-pencil"></i>Editer</a>
                            <a class="adminButton" href="./update.php?type=news&mode=deletion&name='.$article->nameArticle.'"><i class="fa fa-trash"></i>Supprimer</a>';
                        }
                        echo'<p>'.$article->datePublicationArticle.'</p>';
                        echo'</footer>
                    </article>';
                    ?>
                </div>
            </section>
        </main>
        <?php require("inc/footer.inc.php"); ?>
    </body>
</html>