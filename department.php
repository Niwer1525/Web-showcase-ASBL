<!DOCTYPE html>
<html lang="fr">
    <?php
        $title = 'Départements';
        include("inc/header.inc.php");
    ?>
    <body>
        <header class="nav-bar">
            <nav>
                <ul>
                    <li><a href="./index.php">Acceuil</a></li>
                    <li><a href="./team.php">Notre équipe</a></li>
                    <li><a href="./department.php" class="currentPage">Départements</a></li>
                    <li><a href="./contact.php">Contact</a></li>
                    <li><a href="./news.php">Actualités</a></li>
                    <li>
                        <a href="./identification.php">Se connecter <i class="fa fa-user"></i></a>
                    </li>
                </ul>
            </nav>
        </header>
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
                            <a type="adminButton" href="./departmentUpdate.php?type=edition&name=Recherche et développement"><i class="fa fa-pencil"></i>Editer</a>
                            <a type="adminButton"><i class="fa fa-trash"></i>Supprimer</a>
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
                            <a type="adminButton" href="./departmentUpdate.php?type=edition&name=Compatbilité"><i class="fa fa-pencil"></i>Editer</a>
                            <a type="adminButton"><i class="fa fa-trash"></i>Supprimer</a>
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
                            <a type="adminButton" href="./departmentUpdate.php?type=edition&name=Administratif"><i class="fa fa-pencil"></i>Editer</a>
                            <a type="adminButton"><i class="fa fa-trash"></i>Supprimer</a>
                        </footer>
                    </article>
                </div>
            <section>
        </main>
        <?php
            include("inc/footer.inc.php");
        ?>
    </body>
</html>