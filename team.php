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
            <!-- news section -->
            <section>
                <div class="searchHeader">
                    <h2>ACTUALITES PAR DEPARTEMENT</h2>
                    <!-- Search container -->
                    <div class="searchBox">
                        <button type="button"><span class="material-symbols-outlined">filter_alt</span></button>
                        <input type="text" placeholder="Rechercher une actualité">
                        <button type="button"><span class="material-symbols-outlined">search</span></button>
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
                                <button type="button"><i class="fa fa-pencil"></i>Editer</button>
                                <button type="button"><i class="fa fa-trash"></i>Supprimer</button>
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
                                <button type="button"><i class="fa fa-pencil"></i>Editer</button>
                                <button type="button"><i class="fa fa-trash"></i>Supprimer</button>
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
                                <button type="button"><i class="fa fa-pencil"></i>Editer</button>
                                <button type="button"><i class="fa fa-trash"></i>Supprimer</button>
                            </footer>
                        </article>
                    </div>
                </details>
                <!-- Second department -->
                <details>
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
                                <button type="button"><i class="fa fa-pencil"></i>Editer</button>
                                <button type="button"><i class="fa fa-trash"></i>Supprimer</button>
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
                                <button type="button"><i class="fa fa-pencil"></i>Editer</button>
                                <button type="button"><i class="fa fa-trash"></i>Supprimer</button>
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