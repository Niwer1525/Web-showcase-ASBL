<!DOCTYPE html>
<html lang="fr">
    <?php
        $title = 'Ajout/Edition actualité';
        require("inc/header.inc.php");
    ?>
    <body>
        <header class="nav-bar">
            <nav>
                <ul><li><a href="./news.php">Retour</a></li></ul>
            </nav>
        </header>
        <main>
            <h2>
                <?php
                    $type = $_GET["type"];
                    if($type == "add") echo "Ajout actualité";
                    else echo "Edition actualité (" . $_GET["name"] . ")";
                ?>
            </h2><hr>
            <form action="./" method="get" enctype="multipart/form-data">
                <!-- Title -->
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
                <textarea id="message" name="news_message" placeholder="Message" required></textarea>
                <button type="submit">Modifier l'actualité</button>
            </form>
        </main>
        <?php
            require("inc/footer.inc.php");
        ?>
    </body>
</html>