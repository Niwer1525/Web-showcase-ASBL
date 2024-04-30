<!DOCTYPE html>
<html lang="fr">
    <?php
        $title = 'Actualités';
        require_once("./inc/header.inc.php");
    ?>
    <body>
        <?php
            $pageName = 'news';
            require_once("./inc/nav.inc.php");
        ?>
        <main>
            <section class="subHeader">
                <h1>TOUTES LES ACUTALITÉS</h1>
                <hr>
                <?php
                    if(isset($_SESSION["devweb_user"]))
                        echo '<a class="adminButton" href="./update.php?type=news&mode=addition"><i class="fa fa-plus"></i> Ajouter un article</a>';
                ?>
            </section>
            <?php require_once("./inc/search.inc.php"); ?>
            <section>
                <?php
                    require_once("./php/util.php");
                    require_once("./php/db_department.php");
                    require_once("./php/db_article.php");
                    use DB\Department;
                    use DB\Article;
                    use Utils\Util;

                    $searchDepartmentResult = isset($_GET["searchDepartmentResult"]) && strcmp($_GET["searchDepartmentResult"], 'empty') ? $_GET["searchDepartmentResult"] : null;
                    foreach(Department::getDepartments() as $department) {
                        if($searchDepartmentResult != null && !Util::search($searchDepartmentResult, $department->nameDepartment)) {
                            continue;
                        }
                        echo '<details open><summary>'.$department->nameDepartment.'</summary>
                            <div class="cardsContainer">';
                            $remCount = 0;
                            $searchResult = isset($_GET["searchResult"]) ? $_GET["searchResult"] : null;
                            $articles = Article::getArticlesByDepartment($department->nameDepartment);
                            foreach($articles as $article) {
                                if($article->visibility != 0 && !isset($_SESSION["devweb_user"])) continue;
                                if($searchResult != null && (
                                    !Util::search($searchResult, $article->nameArticle)
                                    || !Util::search($searchResult, $article->introArticle)
                                    || !Util::search($searchResult, $article->contentArticle)
                                )) {
                                    $remCount++;
                                    continue;
                                }
                                echo'<article>
                                    <header>
                                        <img src="./uploads/articles/'.$article->id.'/'.$article->imageArticle.'" alt="Image '.strtolower($article->nameArticle).'">'
                                        .($article->visibility != 0 ? '<div class="membersOnly"><span>Seuls les membres peuvent voir cet article</span></div>' : '').
                                        '<h2>'.$article->nameArticle.'</h2>
                                    </header>
                                    <p>'.$article->introArticle.'</p>
                                    <a href="./fullNews.php?id='.$article->id.'">Lire plus</a>
                                    <footer>';
                                        if(isset($_SESSION["devweb_user"])) {
                                            echo '<a class="adminButton" href="./update.php?type=news&mode=edition&id='. $article->id .'"><i class="fa fa-pencil"></i>Editer</a>
                                            <a class="adminButton" href="./update.php?type=news&mode=deletion&id='. $article->id .'"><i class="fa fa-trash"></i>Supprimer</a>';
                                        }
                                       echo'<p>'.$article->datePublicationArticle.'</p>
                                    </footer>
                                </article>';
                            }
                            if(count($articles) == $remCount)
                                echo '<p>Aucun article trouvé</p>';
                        echo'</div></details>';
                    }
                ?>
            </section>
        </main>
        <?php require_once("./inc/footer.inc.php"); ?>
    </body>
</html>