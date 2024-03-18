<!DOCTYPE html>
<html lang="fr">
    <?php
        $title = 'Actualités';
        require("inc/header.inc.php");
    ?>
    <body>
        <?php
            $pageName = 'news';
            require("inc/nav.inc.php");
        ?>
        <main>
            <section class="usefulLinks">
                <h1>TOUTES LES ACUTALITES</h1>
                <hr>
                <?php
                    if(isset($_SESSION["user"])) 
                        echo '<a class="adminButton" href="./update.php?type=news&mode=addition"><i class="fa fa-plus"></i> Ajouter un article</a>';
                ?>
            </section>
            <?php require("inc/search.inc.php"); ?>
            <section>
                <?php
                    require_once("./php/db_department.php");
                    require_once("./php/db_article.php");
                    use DB\Department;
                    use DB\Article;

                    foreach(Department::getDepartments() as $department) {
                        echo '<details open><summary>'.$department->nameDepartment.'</summary>
                            <div class="cardsContainer">';
                            foreach(Article::getArticlesByDepartment($department->nameDepartment) as $article) {
                                if($article->visibility != 0 && !isset($_SESSION["user"])) continue;
                                echo'<article>
                                    <header>
                                        <img src="./uploads/'.$article->nameArticle.'/'.$article->imageArticle.'" alt="Image '.strtolower($article->nameArticle).'">'
                                        .($article->visibility != 0 ? '<div class="membersOnly"><span>Seul les membres peuvent voir cet article</span></div>' : '').
                                        '<h2>'.$article->nameArticle.'</h2>
                                    </header>
                                    <p>'.$article->introArticle.'</p>
                                    <a href="./fullNews.php?name='.$article->nameArticle.'">Lire plus</a>
                                    <footer>';
                                        if(isset($_SESSION["user"])) {
                                            echo '<a class="adminButton" href="./update.php?type=news&mode=edition&name='. $article->nameArticle .'"><i class="fa fa-pencil"></i>Editer</a>
                                            <a class="adminButton" href="./update.php?type=news&mode=deletion&name='. $article->nameArticle .'"><i class="fa fa-trash"></i>Supprimer</a>';
                                        }
                                       echo'<p>'.$article->datePublicationArticle.'</p>
                                </article>';
                            }
                        echo'</div></details>';
                    }
                ?>
            </section>
        </main>
        <?php require("inc/footer.inc.php"); ?>
    </body>
</html>