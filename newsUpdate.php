<html lang="fr">
    <?php
        $title = 'Ajout/Edition actualité';
        include("inc/header.inc.php");
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
            <form>
                <label for="title">Titre</label>
                <input type="text" id="title" name="news_title" placeholder="De nouveaux livres">
                <label for="imageURL">URL de l'image</label>
                <input type="text" id="imageURL" name="news_image" placeholder="https://google.com">
                <label for="message">Message</label>
                <textarea id="message" name="news_message" placeholder="Message"></textarea>
                <button type="submit">Envoyer</button>
            </form>
        </main>
        <?php
            include("inc/footer.inc.php");
        ?>
    </body>
</html>