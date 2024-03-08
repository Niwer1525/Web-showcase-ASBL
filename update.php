<!DOCTYPE html>
<html lang="fr">
    <?php
        $type = $_GET["type"]; // Can be : "news", "department" or "member"
        $mode = $_GET["mode"]; // Can be : "edition" or "deletion"
        $name = $_GET["name"]; // Name of the new, department or member
        $title = 'Ajout/Edition '.($type == "news" ? "article" : ($type == "department" ? "département" : "membre"));
        require("inc/header.inc.php");
    ?>
    <body>
        <header class="nav-bar">
            <nav>
                <ul><li><a <?php
                    echo'href="./';
                    switch($type) {
                        case "news":
                            echo 'news.php"';
                            break;
                        case "department":
                            echo 'department.php"';
                            break;
                        case "member":
                            echo 'team.php"';
                            break;
                    }
                    echo'.php"';
                ?>>Retour</a></li></ul>
            </nav>
        </header>
        <main>
            <section class="usefulLinks">
                <h1>
                    <?php // Display the title of the page
                        switch($type) {
                            case "news":
                                echo ($mode == "edition" ? "Edition de l'article : " : "Suppression de l'article : ") . $name;
                                break;
                            case "department":
                                echo ($mode == "edition" ? "Edition du département : " : "Suppression du département : ") . $name;
                                break;
                            case "member":
                                echo ($mode == "edition" ? "Edition du membre : " : "Suppression du membre : ") . $name;
                                break;
                        }
                    ?>
                </h1>
                <hr>
            </section>
            <section>
                <form action="./" method="get" enctype="multipart/form-data">
                    <?php
                        if($mode == "edition") {
                            switch($type) {
                                case "news":
                                    echo' <!-- Title -->
                                    <label for="title">Intitulé</label>
                                    <input type="text" id="title" name="news_title" placeholder="De nouveaux livres" required>
                                    <!-- Date -->
                                    <label for="date">Date</label>
                                    <input type="date" id="date" name="news_date" placeholder="De nouveaux livres" required>
                                    <!-- Image -->
                                    <label for="image">Image</label>
                                    <input type="file" id="image" name="news_image" accept="image/*" required>
                                    <!-- Visibility -->
                                    <label for="visibility">Visibilité</label>
                                    <select id="visibility" name="news_visibility" required>
                                        <option value="members" selected="selected">Membres</option>
                                        <option value="everyone">Tout le monde</option>
                                    </select>
                                    <!-- Department -->
                                    <label for="department">Département</label>
                                    <select id="Department" name="news_Department">
                                        <option value="empty" selected="selected">Aucun département</option>
                                        <option value="technic">Technique</option>
                                    </select>
                                    <!-- Primer -->
                                    <label for="primer">Amorce</label>
                                    <textarea id="primer" name="news_primer" placeholder="Amorce" required></textarea>
                                    <!-- Full content -->
                                    <label for="message">Texte complet</label>
                                    <textarea id="message" name="news_message" placeholder="Message" required></textarea>';
                                    break;
                                case "department": //TODO add autocomplete
                                    echo '<label for="name">Nom</label>
                                    <input type="text" id="name" name="department_name" placeholder="Recherche et développement" required>
                                    <label for="objectif">Objectif</label>
                                    <textarea id="objectif" name="department_objective" placeholder="Objectif du département" required></textarea>';
                                    break;
                                case "member":
                                    echo'<label for="name">Nom</label>
                                    <input type="text" id="name" name="teammate_name" placeholder="Bernard" required>
                                    <label for="prenom">Prénom</label>
                                    <input type="text" id="prenom" name="first_name" placeholder="Clément required">
                                    <label for="profession">Profession</label>
                                    <input type="text" id="profession" name="teammate_work" placeholder="Enseignant" required>
                                    <label for="department">Département</label>
                                    <select id="department" name="department" required>
                                        <option value="1">Recherche et développement</option>
                                        <option value="2">Marketing</option>
                                        <option value="3">Communication</option>
                                        <option value="4">Comptabilité</option>
                                        <option value="5">Ressources humaines</option>
                                    </select>';
                                    break;
                            }
                            echo'<button type="submit">Modifier</button>';
                        } else {

                        }
                    ?>
                </form>
            </section>
        </main>
        <?php require("inc/footer.inc.php"); ?>
    </body>
</html>