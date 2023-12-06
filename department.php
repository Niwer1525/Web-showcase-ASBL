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
                            <button type="button"><i class="fa fa-pencil"></i>Editer</button>
                            <button type="button"><i class="fa fa-trash"></i>Supprimer</button>
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
                            <button type="button"><i class="fa fa-pencil"></i>Editer</button>
                            <button type="button" href="zeze"><i class="fa fa-trash"></i>Supprimer</button>
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
                            <button type="button"><i class="fa fa-pencil"></i>Editer</button>
                            <button type="button"><i class="fa fa-trash"></i>Supprimer</button>
                        </footer>
                    </article>
                </div>
            </section>
        </main>
        <?php
            include("inc/footer.inc.php");
        ?>
    </body>
</html>