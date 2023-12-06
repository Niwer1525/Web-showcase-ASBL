<html lang="fr">
    <?php
        $title = 'Actualités';
        include("inc/header.inc.php");
    ?>
    <body>
        <header class="nav-bar">
            <nav>
                <ul>
                    <li><a href="./index.php">Acceuil</a></li>
                    <li><a href="./team.php">Notre équipe</a></li>
                    <li><a href="./department.php">Départements</a></li>
                    <li><a href="./contact.php">Contact</a></li>
                    <li><a href="./news.php" class="currentPage">Actualités</a></li>
                    <li>
                        <a href="./identification.php">Se connecter <i class="fa fa-user"></i></a>
                    </li>
                </ul>
            </nav>
        </header>
        <main>
            <section>
                <div class="searchHeader">
                    <h2>ACTUALITES PAR DEPARTEMENT</h2>
                    <!-- Search container -->
                    <div class="searchBox">
                        <a class="searchButton" href="./newsUpdate.php?type=add"><i class="fa fa-plus"></i></a>
                        <a class="searchButton"><i class="fa fa-filter"></i></a>
                        <input type="text" placeholder="Rechercher">
                        <a class="searchButton"><i class="fa fa-search"></i></a>
                    </div>
                </div>
                <!-- First department -->
                <details open>
                    <summary>Recherche et développement</summary>
                    <div class="cardsContainer">
                        <!-- article 1 -->
                        <article>
                            <header>
                                <img src="./images/article1.jpg" alt="Image article 1">
                                <h3>Titre article 1</h3>
                            </header>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec maximus lacus in erat ultrices, quis ultrices justo aliquam. Nam placerat eleifend nisi. Pellentesque a vulputate nisi. Cras rutrum odio a condimentum vehicula. Sed vel velit et orci porta imperdiet. Donec imperdiet diam quis leo porta, fringilla efficitur ex placerat. Vestibulum vehicula lacus id ultricies semper.</p>
                            <a href="./fullNews.php">Lire plus</a>
                            <footer>
                                <a type="adminButton" href="./newsUpdate.php?type=edition&name=Titre Article 1"><i class="fa fa-pencil"></i>Editer</a>
                                <a type="adminButton"><i class="fa fa-trash"></i>Supprimer</a>
                                <p>20 octobre 2023</p>
                            </footer>
                        </article>
                        <!-- article 2 -->
                        <article>
                            <header>
                                <img src="./images/article2.jpg" alt="Image article 2">
                                <h3>Titre article 2</h3>
                            </header>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec maximus lacus in erat ultrices, quis ultrices justo aliquam. Nam placerat eleifend nisi. Pellentesque a vulputate nisi. Cras rutrum odio a condimentum vehicula. Sed vel velit et orci porta imperdiet. Donec imperdiet diam quis leo porta, fringilla efficitur ex placerat. Vestibulum vehicula lacus id ultricies semper.</p>
                            <a href="./fullNews.php">Lire plus</a>
                            <footer>
                                <a type="adminButton" href="./newsUpdate.php?type=edition&name=Titre Article 2"><i class="fa fa-pencil"></i>Editer</a>
                                <a type="adminButton"><i class="fa fa-trash"></i>Supprimer</a>
                                <p>10 octobre 2023</p>
                            </footer>
                        </article>
                        <!-- article 3 -->
                        <article>
                            <header>
                                <img src="./images/article3.jpg" alt="Image article 3">
                                <h3>Titre article 3</h3>
                            </header>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec maximus lacus in erat ultrices, quis ultrices justo aliquam. Nam placerat eleifend nisi. Pellentesque a vulputate nisi. Cras rutrum odio a condimentum vehicula. Sed vel velit et orci porta imperdiet. Donec imperdiet diam quis leo porta, fringilla efficitur ex placerat. Vestibulum vehicula lacus id ultricies semper.</p>
                            <a href="./fullNews.php">Lire plus</a>
                            <footer>
                                <a type="adminButton"><i class="fa fa-pencil"></i>Editer</a>
                                <a type="adminButton"><i class="fa fa-trash"></i>Supprimer</a>
                                <p>15 mai 2023</p>
                            </footer>
                        </article>
                    </div>
                </details>
                <!-- Second department -->
                <details>
                    <summary>Comptabilité</summary>
                    <div class="cardsContainer">
                        <!-- article 1 -->
                        <article>
                            <header>
                                <img src="./images/article1.jpg" alt="Image article 1">
                                <h3>Titre article 1</h3>
                            </header>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec maximus lacus in erat ultrices, quis ultrices justo aliquam. Nam placerat eleifend nisi. Pellentesque a vulputate nisi. Cras rutrum odio a condimentum vehicula. Sed vel velit et orci porta imperdiet. Donec imperdiet diam quis leo porta, fringilla efficitur ex placerat. Vestibulum vehicula lacus id ultricies semper.</p>
                            <a href="./fullNews.php">Lire plus</a>
                            <footer>
                                <a type="adminButton"><i class="fa fa-pencil"></i>Editer</a>
                                <a type="adminButton"><i class="fa fa-trash"></i>Supprimer</a>
                                <p>20 octobre 2023</p>
                            </footer>
                        </article>
                        <!-- article 2 -->
                        <article>
                            <header>
                                <img src="./images/article2.jpg" alt="Image article 2">
                                <h3>Titre article 2</h3>
                            </header>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec maximus lacus in erat ultrices, quis ultrices justo aliquam. Nam placerat eleifend nisi. Pellentesque a vulputate nisi. Cras rutrum odio a condimentum vehicula. Sed vel velit et orci porta imperdiet. Donec imperdiet diam quis leo porta, fringilla efficitur ex placerat. Vestibulum vehicula lacus id ultricies semper.</p>
                            <a href="./fullNews.php">Lire plus</a>
                            <footer>
                                <a type="adminButton"><i class="fa fa-pencil"></i>Editer</a>
                                <a type="adminButton"><i class="fa fa-trash"></i>Supprimer</a>
                                <p>10 octobre 2023</p>
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