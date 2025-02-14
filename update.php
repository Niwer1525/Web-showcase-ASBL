<!DOCTYPE html>
<html lang="fr">
    <?php
        define("NEWS_TYPE", "news");
        define("DEPARTMENT_TYPE", "department");
        define("MEMBER_TYPE", "member");

        define("EDITION_MODE", "edition");
        define("DELETION_MODE", "deletion");
        define("ADDITION_MODE", "addition");

        $type = htmlspecialchars($_GET["type"]); // Can be : "news", "department" or "member"
        $mode = htmlspecialchars($_GET["mode"]); // Can be : "edition", "deletion" or "addition"
        $isAddition = $mode == ADDITION_MODE; // Check if the mode is an addition
        $id = $isAddition ? 0 : htmlspecialchars($_GET["id"]); // Id of the news, department or member
        $title = 'Ajout/Edition '.($type == NEWS_TYPE ? "article" : ($type == DEPARTMENT_TYPE ? "département" : "membre"));
        require_once("./inc/header.inc.php");

        if(!isset($_SESSION["devweb_user"])) {
            header("Location: ./identification.php");
            exit();
        }
    ?>
    <body>
        <header class="nav-bar"><nav>
            <ul><li><a <?php echo'href="./'.($type == NEWS_TYPE ? 'news' : ($type == DEPARTMENT_TYPE ? 'department' : 'team')).'.php"'; ?>>Annuler</a></li></ul>
        </nav></header>
        <main>
            <section class="subHeader">
                <h1>
                    <?php // Display the title of the page
                    if($isAddition) echo "Ajout d'un " . ($type == NEWS_TYPE ? "article" : ($type == DEPARTMENT_TYPE ? "département" : "membre"));
                    else {
                        switch($type) {
                            case NEWS_TYPE:
                                echo $mode == EDITION_MODE ? "Edition d'article : " : "Suppression d'article : ";
                                break;
                            case DEPARTMENT_TYPE:
                                echo $mode == EDITION_MODE ? "Edition de département : " : "Suppression de département : ";
                                break;
                            case MEMBER_TYPE:
                                echo $mode == EDITION_MODE ? "Edition de membre : " : "Suppression de membre : ";
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
                        require_once("./php/util.php");
                        require_once("./php/db_department.php");
                        require_once("./php/db_article.php");
                        require_once("./php/db_account.php");
                        require_once("./php/db_roles.php");
                        use DB\Department;
                        use DB\Article;
                        use DB\Member;
                        use Main\Role;
                        use Utils\Util;

                        /* Print two hidden form to send additional datas */
                        echo'<input type="hidden" name="type" value="'.$type.'"><input type="hidden" name="mode" value="'.$mode.'"><input type="hidden" name="id" value="'.$id.'"></input>';
                        if($mode == EDITION_MODE || $isAddition) {
                            switch($type) {
                                case NEWS_TYPE:
                                    $article = $isAddition ? null : Article::getArticle($id);
                                    $datePublication = $isAddition ? '' : strval(date("Y-m-d", strtotime($article->datePublicationArticle)));

                                    echo '
                                    <label for="title">Intitulé<span class="required">*</span></label>
                                    <input type="text" id="title" name="news_title" placeholder="De nouveaux livres" required value="'.($isAddition ? "" : $article->nameArticle).'">
                                    
                                    <label for="date">Date<span class="required">*</span></label>
                                    <input type="date" id="date" name="news_date" placeholder="25/02/2019" required value="'.$datePublication.'">
                                    
                                    <label for="image">Image</label>'
                                    .(!$isAddition ? '<img src="./uploads/articles/'.$article->id.'/'.$article->imageArticle.'" alt="Image actuel">' : ''). // Display the current article image
                                    '<input type="file" id="image" name="news_image" accept="image/*">

                                    <label for="primer">Amorce<span class="required">*</span></label>
                                    <textarea id="primer" name="news_primer" placeholder="Amorce" required>'.($isAddition ? "" : $article->introArticle).'</textarea>

                                    <label for="message">Texte complet<span class="required">*</span></label>
                                    <textarea id="message" name="news_message" placeholder="Message" required>'.($isAddition ? "" : $article->contentArticle).'</textarea>

                                    <label for="visibility">Visibilité<span class="required">*</span></label>
                                    <select id="visibility" name="news_visibility" required>
                                        <option value="0" '.($isAddition ? 'selected="selected"' : ($article->visibility == 0 ? 'selected="selected"' : '')).'>Tout le monde</option>
                                        <option value="1" '.($isAddition ? '' : ($article->visibility == 1 ? 'selected="selected"' : '')).'>Membre seulement</option>
                                    </select>

                                    <label for="department">Département<span class="required">*</span></label>
                                    <select id="Department" name="news_Department" required>';
                                    Department::printDepartmentOptions($isAddition ? null : $article->department);
                                    echo'</select>';
                                    break;
                                case DEPARTMENT_TYPE:
                                    $department = $isAddition ? null : Department::getDepartment($id);

                                    /* Print the result */
                                    echo
                                    '<label for="name">Nom<span class="required">*</span></label>
                                    <input type="text" id="name" name="department_name" placeholder="Recherche et développement" required value="' . ($isAddition ? "" : $department->nameDepartment) . '">
                                    <label for="objectif">Objectif<span class="required">*</span></label>
                                    <textarea id="objectif" name="department_objective" placeholder="Imagine et test de nouveaux produits" required>' . ($isAddition ? "" : $department->descDepartment) . '</textarea>';
                                    break;
                                case MEMBER_TYPE:
                                    $member = $isAddition ? null : Member::getMember($id);

                                    echo
                                    '<label for="name">Nom<span class="required">*</span></label>
                                    <input type="text" id="name" name="teammate_name" placeholder="Bernard" required value="' . ($isAddition ? "" : $member->lastNameMember) . '">

                                    <label for="first_name">Prénom<span class="required">*</span></label>
                                    <input type="text" id="first_name" name="teammate_first_name" placeholder="Clément" required value="' . ($isAddition ? "" : $member->nameMember) . '">
                                    
                                    <label for="email">Adresse email<span class="required">*</span></label>
                                    <input type="text" id="email" name="teammate_email" placeholder="clember@yahoo.com" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" required value="' . ($isAddition ? "" : $member->emailMember) . '">
                                    
                                    <label for="phone">Numéro de téléphone<span class="required">*</span></label>
                                    <input type="tel" id="phone" name="teammate_phone" placeholder="04 11 11 111" required value="' . ($isAddition ? "" : $member->phoneMember) . '">
                                    
                                    <label for="teammate_description">Texte complet<span class="required">*</span></label>
                                    <textarea id="teammate_description" name="teammate_description" placeholder="Je suis un professeur d\'histoire, ma passion est de partager mes conaissances avec les plus jeunes !" required>'.($isAddition ? "" : $member->descMember).'</textarea>

                                    <label for="image">Photo de profile</label>'
                                    .(!$isAddition ? '<img src="./uploads/members/'.$member->id.'/'.$member->imageMember.'" alt="Photo de profile actuel">' : ''). // Display the current article image
                                    '<input type="file" id="image" name="teammate_image" accept="image/*">

                                    <label for="profession">Profession<span class="required">*</span></label>
                                    <input type="text" id="profession" name="teammate_work" placeholder="Enseignant" required value="' . ($isAddition ? "" : $member->workMember) . '">

                                    <label for="role">Rôle<span class="required">*</span></label>
                                    <select id="role" name="teammate_role" required>';
                                    Role::printRoleOptions($isAddition ? null : $member->role->nameRole);
                                    echo'</select>
                                    
                                    <label for="department">Département<span class="required">*</span></label>
                                    <select id="department" name="teammate_department" required>';
                                    Department::printDepartmentOptions($isAddition ? null : $member->nameDepartment);
                                    echo'</select>';
                                    break;
                            }
                            echo'<button type="submit">'.($isAddition ? "Ajouter" : "Modifier").'</button>';
                        } else echo '<button type="submit">Supprimer</button>';
                    ?>
                </form>
            </section>
        </main>
        <?php require_once("./inc/footer.inc.php"); ?>
    </body>
</html>