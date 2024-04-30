<!DOCTYPE html>
<html lang="fr">
    <?php
        $title = 'Article 1';
        require_once("./inc/header.inc.php");
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
                        require_once("./php/util.php");
                        require_once("./php/db_article.php");
                        use DB\Article;
                        use Utils\Util;
                        $article = Article::getArticle($_GET['id']);

                        echo '<article class="largeArticle">
                        <header>
                            <img src="./uploads/articles/'.$article->id.'/'.$article->imageArticle.'" alt="Image '.strtolower($article->nameArticle).'">'
                            .($article->visibility != 0 ? '<div class="membersOnly"><span>Seuls les membres peuvent voir cet article</span></div>' : '').
                            '<h2>'.$article->nameArticle.'</h2>
                        </header>
                        <p>'.$article->contentArticle.'</p>
                        <footer>';
                        if(isset($_SESSION["devweb_user"])) {
                            echo'<a class="adminButton" href="./update.php?type=news&mode=edition&id='.$article->id.'"><i class="fa fa-pencil"></i>Editer</a>
                            <a class="adminButton" href="./update.php?type=news&mode=deletion&id='.$article->id.'"><i class="fa fa-trash"></i>Supprimer</a>';
                        }
                        echo'<p>'.$article->datePublicationArticle.'</p>';
                        echo'</footer>
                    </article>';
                    ?>
                </div>
            </section>
        </main>
        <?php require_once("./inc/footer.inc.php"); ?>
    </body>
</html>