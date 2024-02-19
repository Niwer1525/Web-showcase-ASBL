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
                    <!-- First department -->
                    <article>
                        <header>
                            <h3>Recherche et développement</h3>
                        </header>
                        <p>
                            <span>Objectifs :</span><br>
                            Chercher à créer de nouveaux produits ou améliorer les produits existants.<br>
                        </p>
                        <footer>
                            <a class="adminButton" href="./departmentUpdate.php?type=edition&name=Recherche&développement"><i class="fa fa-pencil"></i>Editer</a>
                            <a class="adminButton" href="./departmentUpdate.php?type=deletion"><i class="fa fa-trash"></i>Supprimer</a>
                        </footer>
                    </article>
                    <!-- Second department -->
                    <article>
                        <header>
                            <h3>Comptabilité</h3>
                        </header>
                        <p>
                            <span>Objectifs :</span><br>
                            Gérer les entrées et sorties d'argent dans l'ASBL, mais également les paiement de taxes et impôts ou même la réception de subside<br>
                        </p>
                        <footer>
                            <a class="adminButton" href="./departmentUpdate.php?type=edition&name=Compatbilité"><i class="fa fa-pencil"></i>Editer</a>
                            <a class="adminButton" href="./departmentUpdate.php?type=deletion"><i class="fa fa-trash"></i>Supprimer</a>
                        </footer>
                    </article>
                    <!-- Third department -->
                    <article>
                        <header>
                            <h3>Administratif</h3>
                        </header>
                        <p>
                            <span>Objectifs :</span><br>
                            Prendre des décisions de haute importance concernant tout genre de sujets<br>
                        </p>
                        <footer>
                            <a class="adminButton" href="./departmentUpdate.php?type=edition&name=Administratif"><i class="fa fa-pencil"></i>Editer</a>
                            <a class="adminButton" href="./departmentUpdate.php?type=deletion"><i class="fa fa-trash"></i>Supprimer</a>
                        </footer>
                    </article>
                </div>
            <section>
        </main>
        <?php
            require("inc/footer.inc.php");
        ?>
    </body>
</html>