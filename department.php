<!DOCTYPE html>
<html lang="fr">
    <?php
        $title = 'Départements';
        require("inc/header.inc.php");
    ?>
    <body>
        <?php
            $pageName = 'department';
            require("inc/nav.inc.php");
        ?>
        <main>
            <section>
                <div class="searchHeader">
                    <h2>DEPARTEMENTS</h2>
                    <!-- Search container -->
                    <div class="searchBox">
                        <a class="searchButton" href="./departmentUpdate.php?type=add"><i class="fa fa-plus"></i></a>
                        <a class="searchButton"><i class="fa fa-filter"></i></a>
                        <input type="text" placeholder="Rechercher">
                        <a class="searchButton"><i class="fa fa-search"></i></a>
                    </div>
                </div>
                <div class="cardsContainer">
                    <?php
                        /* Get the datas from the database */
                        foreach (Department::getDepartments() as $department) {
                            echo '<article>
                                <header><h3>' . $department . '</h3></header>
                                <p><span>Objectifs :</span><br>' . $department . '</p>
                                <footer>
                                    <a class="adminButton" href="./departmentUpdate.php?type=edition&name=Recherche&développement"><i class="fa fa-pencil"></i>Editer</a>
                                    <a class="adminButton" href="./departmentUpdate.php?type=deletion"><i class="fa fa-trash"></i>Supprimer</a>
                                </footer>
                            </article>';
                        }
                    ?>
                </div>
            <section>
        </main>
        <?php
            require("inc/footer.inc.php");
        ?>
    </body>
</html>