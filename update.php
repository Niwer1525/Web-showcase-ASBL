<!DOCTYPE html>
<html lang="fr">
    <?php
        define("NEWS_TYPE", "news");
        define("DEPARTMENT_TYPE", "department");
        define("MEMBER_TYPE", "member");

        define("EDITION_MODE", "edition");
        define("DELETION_MODE", "deletion");
        define("ADDITION_MODE", "addition");

        $type = $_GET["type"]; // Can be : "news", "department" or "member"
        $mode = $_GET["mode"]; // Can be : "edition", "deletion" or "addition"
        $isAddition = $mode == ADDITION_MODE; // Check if the mode is an addition
        $name = $isAddition ? "" : $_GET["name"]; // Name of the news, department or member
        $title = 'Ajout/Edition '.($type == NEWS_TYPE ? "article" : ($type == DEPARTMENT_TYPE ? "département" : "membre"));
        require("inc/header.inc.php");
    ?>
    <body>
        <header class="nav-bar"><nav>
            <ul><li><a <?php echo'href="./'.$type.'.php"'; ?>>Retour</a></li></ul>
        </nav></header>
        <main>
            <section class="usefulLinks">
                <h1>
                    <?php // Display the title of the page
                    if($isAddition) echo "Ajout d'un " . $type;
                    else {
                        switch($type) {
                            case NEWS_TYPE:
                                echo ($mode == EDITION_MODE ? "Edition de l'article : " : "Suppression de l'article : ") . $name;
                                break;
                            case DEPARTMENT_TYPE:
                                echo ($mode == EDITION_MODE ? "Edition du département : " : "Suppression du département : ") . $name;
                                break;
                            case MEMBER_TYPE:
                                echo ($mode == EDITION_MODE ? "Edition du membre : " : "Suppression du membre : ") . $name;
                                break;
                        }
                    }
                    ?>
                </h1>
                <hr>
            </section>
            <section>
                <form action="./update_object.php" method="post" enctype="multipart/form-data">
                    <?php
                        require_once("./php/db_department.php");
                        require_once("./php/db_article.php");
                        use DB\Department;
                        use DB\Article;

                        /* Print two hidden form to send additional datas */
                        echo'<input type="hidden" name="type" value="'.$type.'"><input type="hidden" name="mode" value="'.$mode.'">';
                        if($mode == EDITION_MODE || $isAddition) {
                            switch($type) {
                                case NEWS_TYPE:
                                    $article = $isAddition ? null : Article::getArticle($name);

                                    echo '
                                    <label for="title">Intitulé</label>
                                    <input type="text" id="title" name="news_title" placeholder="De nouveaux livres" required value="'.($isAddition ? "" : $article->nameArticle).'">
                                    
                                    <label for="date">Date</label>
                                    <input type="text" id="date" name="news_date" placeholder="25/02/2019" required value="'.($isAddition ? '' : date("d-m-Y", strtotime($article->datePublicationArticle))).'">
                                    
                                    <label for="image">Image</label>'
                                    .(!$isAddition ? '<img src="./images/article1.jpg" alt="Current article image">' : ''). // Display the current article image
                                    '<input type="file" id="image" name="news_image" accept="image/*">

                                    <label for="primer">Amorce</label>
                                    <textarea id="primer" name="news_primer" placeholder="Amorce" required>'.($isAddition ? "" : $article->introArticle).'</textarea>

                                    <label for="message">Texte complet</label>
                                    <textarea id="message" name="news_message" placeholder="Message" required>'.($isAddition ? "" : $article->contentArticle).'</textarea>

                                    <label for="visibility">Visibilité</label>
                                    <select id="visibility" name="news_visibility" required>
                                        <option value="1" '.($isAddition ? 'selected="selected"' : ($article->visibility == 1 ? 'selected="selected"' : '')).'>Tout le monde</option>
                                        <option value="0" '.($isAddition ? '' : ($article->visibility == 0 ? 'selected="selected"' : '')).'>Membre seulement</option>
                                    </select>

                                    <label for="department">Département</label>
                                    <select id="Department" name="news_Department">';
                                    Department::printDepartmentOptions($isAddition ? null : $article->department);
                                    echo'</select>';
                                    break;
                                case DEPARTMENT_TYPE:
                                    $department = $isAddition ? null : Department::getDepartment($name);

                                    /* Print the result */
                                    echo
                                    '<label for="name">Nom</label>
                                    <input type="text" id="name" name="department_name" placeholder="Recherche et développement" required value="' . ($isAddition ? "" : $department->nameDepartment) . '">
                                    <label for="objectif">Objectif</label>
                                    <textarea id="objectif" name="department_objective" placeholder="Imagine et test de nouveaux produits" required>' . ($isAddition ? "" : $department->descDepartment) . '</textarea>';
                                    break;
                                case MEMBER_TYPE:
                                    echo
                                    '<label for="name">Nom</label>
                                    <input type="text" id="name" name="teammate_name" placeholder="Bernard" required>

                                    <label for="prenom">Prénom</label>
                                    <input type="text" id="prenom" name="first_name" placeholder="Clément required">

                                    <label for="profession">Profession</label>
                                    <input type="text" id="profession" name="teammate_work" placeholder="Enseignant" required>

                                    <label for="department">Département</label>
                                    <select id="department" name="department" required>';
                                    Department::printDepartmentOptions($isAddition ? null : $article->nameArticle);
                                    echo'</select>';
                                    break;
                            }
                            echo'<button type="submit">'.($isAddition ? "Ajouter" : "Modifier").'</button>';
                        } else echo'<input type="hidden" name="name" value="'.$name.'"></input><button type="submit">Supprimer</button>';
                    ?>
                </form>
            </section>
        </main>
        <?php require("inc/footer.inc.php"); ?>
    </body>
</html>