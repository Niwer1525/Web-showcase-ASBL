<html lang="fr">
    <?php
        $title = 'Ajout/Edition département';
        include("inc/header.inc.php");
    ?>
    <body>
        <header class="nav-bar">
            <nav>
                <ul><li><a href="./department.php">Retour</a></li></ul>
            </nav>
        </header>
        <main>
            <section>
                <h2>
                    <?php
                        $type = $_GET["type"];
                        if($type == "add") echo "Ajout département";
                        else echo "Edition département (" . $_GET["name"] . ")";
                    ?>
                </h2><hr>
                <form>
                    <label for="name">Nom</label>
                    <input type="text" id="name" name="department_name" placeholder="Recherche et développement">
                    <label for="objectif">Objectif</label>
                    <textarea id="objectif" name="department_objective" placeholder="Objectif du département"></textarea>
                    <button type="submit">Envoyer</button>
                </form>
            </section>
        </main>
        <?php
            include("inc/footer.inc.php");
        ?>
    </body>
</html>