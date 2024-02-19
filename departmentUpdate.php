<!DOCTYPE html>
<html lang="fr">
    <?php
        $title = 'Ajout/Edition département';
        require("inc/header.inc.php");
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
                <form action="./" method="get">
                    <label for="name">Nom</label>
                    <input type="text" id="name" name="department_name" placeholder="Recherche et développement" required>
                    <label for="objectif">Objectif</label>
                    <textarea id="objectif" name="department_objective" placeholder="Objectif du département" required></textarea>
                    <button type="submit">Modifier le département</button>
                </form>
            </section>
        </main>
        <?php
            require("inc/footer.inc.php");
        ?>
    </body>
</html>