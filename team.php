<!DOCTYPE html>
<html lang="fr">
    <?php
        $title = 'Equipe';
        include("inc/header.inc.php");
    ?>
    <body>
        <header class="nav-bar">
            <nav>
                <ul>
                    <li><a href="./index.php">Acceuil</a></li>
                    <li><a href="./team.php" class="currentPage">Notre équipe</a></li>
                    <li><a href="./department.php">Départements</a></li>
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
                    <h2>NOTRE EQUIPE</h2>
                    <!-- Search container -->
                    <div class="searchBox">
                        <a class="searchButton" href="./teammateUpdate.php?type=add"><i class="fa fa-plus"></i></a>
                        <a class="searchButton"><i class="fa fa-filter"></i></a>
                        <input type="text" placeholder="Rechercher">
                        <a class="searchButton"><i class="fa fa-search"></i></a>
                    </div>
                </div>
                <!-- First department -->
                <details open>
                    <summary>Recherche et développement</summary>
                    <div class="cardsContainer">
                        <!-- Member 1 -->
                        <article class="teamMember">
                            <header>
                                <img src="./images/article1.jpg" alt="Image article 1">
                                <h3>GLUTEN Vladimir</h3>
                            </header>
                            <ul>
                                <li>Profession : Informaticien</li>
                                <li><span>Gérant départements</span></li>
                            </ul>
                            <footer>
                                <a type="adminButton" href="./teammateUpdate.php?type=edition&name=GLUTEN Vladimir"><i class="fa fa-pencil"></i>Editer</a>
                                <a type="adminButton"><i class="fa fa-trash"></i>Supprimer</a>
                            </footer>
                        </article>
                        <!-- Member 2 -->
                        <article class="teamMember">
                            <header>
                                <img src="./images/article1.jpg" alt="Image article 1">
                                <h3>MULLER Joseph</h3>
                            </header>
                            <ul>
                                <li>Profession : Informaticien</li>
                            </ul>
                            <footer>
                                <a type="adminButton" href="./teammateUpdate.php?type=edition&name=MULLER Joseph"><i class="fa fa-pencil"></i>Editer</a>
                                <a type="adminButton"><i class="fa fa-trash"></i>Supprimer</a>
                            </footer>
                        </article>
                        <!-- Generic -->
                        <article class="teamMember">
                            <header>
                                <img src="./images/article1.jpg" alt="Image article 1">
                                <h3>NOM Prénom</h3>
                            </header>
                            <ul>
                                <li><span>Administrateur site internet</span></li>
                                <li>...</li>
                            </ul>
                            <footer>
                                <a type="adminButton"><i class="fa fa-pencil"></i>Editer</a>
                                <a type="adminButton"><i class="fa fa-trash"></i>Supprimer</a>
                            </footer>
                        </article>
                    </div>
                </details>
                <!-- Second department -->
                <details open>
                    <summary>Comptabilité</summary>
                    <div class="cardsContainer">
                        <article class="teamMember">
                            <header>
                                <img src="./images/article1.jpg" alt="Image article 1">
                                <h3>DUPRE Sylvia</h3>
                            </header>
                            <ul>
                                <li>Profession : Comptable</li>
                                <li><span>Gérante départements</span></li>
                            </ul>
                            <footer>
                                <a type="adminButton"><i class="fa fa-pencil"></i>Editer</a>
                                <a type="adminButton"><i class="fa fa-trash"></i>Supprimer</a>
                            </footer>
                        </article>
                        <article class="teamMember">
                            <header>
                                <img src="./images/article1.jpg" alt="Image article 1">
                                <h3>SABBATINI Isabella</h3>
                            </header>
                            <ul>
                                <li>Profession : Comptable</li>
                            </ul>
                            <footer>
                                <a type="adminButton"><i class="fa fa-pencil"></i>Editer</a>
                                <a type="adminButton"><i class="fa fa-trash"></i>Supprimer</a>
                            </footer>
                        </article>
                    </div>
                </details>
            </section>
        </main>
        <?php
            include("inc/footer.inc.php");
        ?>
    </body>
</html>