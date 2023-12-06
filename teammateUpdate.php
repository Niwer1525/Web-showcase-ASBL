<html lang="fr">
    <?php
        $title = 'Ajout/Edition membre';
        include("inc/header.inc.php");
    ?>
    <body>
        <header class="nav-bar">
            <nav>
                <ul><li><a href="./team.php">Retour</a></li></ul>
            </nav>
        </header>
        <main>
            <section>
                <h2>
                    <?php
                        $type = $_GET["type"];
                        if($type == "add") echo "Ajout membre";
                        else echo "Edition membre (" . $_GET["name"] . ")";
                    ?>
                </h2><hr>
                <form>
                    <label for="name">Nom</label>
                    <input type="text" id="name" name="teammate_name" placeholder="Bernard">
                    <label for="prenom">Prénom</label>
                    <input type="text" id="prenom" name="first_name" placeholder="Clément">
                    <label for="profession">Profession</label>
                    <input type="text" id="profession" name="teammate_work" placeholder="Enseignant">
                    <label for="department">Département</label>
                    <select id="department" name="department">
                        <option value="1">Recherche et développement</option>
                        <option value="2">Marketing</option>
                        <option value="3">Communication</option>
                        <option value="4">Comptabilité</option>
                        <option value="5">Ressources humaines</option>
                    </select>
                    <button type="submit">Envoyer</button>
                </form>
            </section>
        </main>
        <?php
            include("inc/footer.inc.php");
        ?>
    </body>
</html>