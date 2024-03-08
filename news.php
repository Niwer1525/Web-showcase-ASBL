<!DOCTYPE html>
<html lang="fr">
    <?php
        $title = 'Actualités';
        require("inc/header.inc.php");
    ?>
    <body>
        <?php
            $pageName = 'news';
            require("inc/nav.inc.php");
        ?>
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
                                <h2>Titre article 1</h2>
                            </header>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec maximus lacus in erat ultrices, quis ultrices justo aliquam. Nam placerat eleifend nisi. Pellentesque a vulputate nisi. Cras rutrum odio a condimentum vehicula. Sed vel velit et orci porta imperdiet. Donec imperdiet diam quis leo porta, fringilla efficitur ex placerat. Vestibulum vehicula lacus id ultricies semper.</p>
                            <a href="./fullNews.php">Lire plus</a>
                            <footer>
                                <a class="adminButton" href="./newsUpdate.php?type=edition&name=Titre_Article_1"><i class="fa fa-pencil"></i>Editer</a>
                                <a class="adminButton" href="./newsUpdate.php?type=deletion"><i class="fa fa-trash"></i>Supprimer</a>
                                <p>20 octobre 2023</p>
                            </footer>
                        </article>
                        <!-- article 2 -->
                        <article>
                            <header>
                                <img src="./images/article2.jpg" alt="Image article 2">
                                <h2>Titre article 2</h2>
                            </header>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec maximus lacus in erat ultrices, quis ultrices justo aliquam. Nam placerat eleifend nisi. Pellentesque a vulputate nisi. Cras rutrum odio a condimentum vehicula. Sed vel velit et orci porta imperdiet. Donec imperdiet diam quis leo porta, fringilla efficitur ex placerat. Vestibulum vehicula lacus id ultricies semper.</p>
                            <a href="./fullNews.php">Lire plus</a>
                            <footer>
                                <a class="adminButton" href="./newsUpdate.php?type=edition&name=Titre_Article_2"><i class="fa fa-pencil"></i>Editer</a>
                                <a class="adminButton" href="./newsUpdate.php?type=deletion"><i class="fa fa-trash"></i>Supprimer</a>
                                <p>10 octobre 2023</p>
                            </footer>
                        </article>
                        <!-- article 3 -->
                        <article>
                            <header>
                                <img src="./images/article3.jpg" alt="Image article 3">
                                <h2>Titre article 3</h2>
                            </header>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec maximus lacus in erat ultrices, quis ultrices justo aliquam. Nam placerat eleifend nisi. Pellentesque a vulputate nisi. Cras rutrum odio a condimentum vehicula. Sed vel velit et orci porta imperdiet. Donec imperdiet diam quis leo porta, fringilla efficitur ex placerat. Vestibulum vehicula lacus id ultricies semper.</p>
                            <a href="./fullNews.php">Lire plus</a>
                            <footer>
                                <a class="adminButton" href="./newsUpdate.php?type=edition&name=Titre_Article_3"><i class="fa fa-pencil"></i>Editer</a>
                                <a class="adminButton" href="./newsUpdate.php?type=deletion"><i class="fa fa-trash"></i>Supprimer</a>
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
                                <h2>Titre article 1</h2>
                            </header>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec maximus lacus in erat ultrices, quis ultrices justo aliquam. Nam placerat eleifend nisi. Pellentesque a vulputate nisi. Cras rutrum odio a condimentum vehicula. Sed vel velit et orci porta imperdiet. Donec imperdiet diam quis leo porta, fringilla efficitur ex placerat. Vestibulum vehicula lacus id ultricies semper.</p>
                            <a href="./fullNews.php">Lire plus</a>
                            <footer>
                                <a class="adminButton" href="./newsUpdate.php?type=edition&name=Titre_Article_1"><i class="fa fa-pencil"></i>Editer</a>
                                <a class="adminButton" href="./newsUpdate.php?type=deletion"><i class="fa fa-trash"></i>Supprimer</a>
                                <p>20 octobre 2023</p>
                            </footer>
                        </article>
                        <!-- article 2 -->
                        <article>
                            <header>
                                <img src="./images/article2.jpg" alt="Image article 2">
                                <h2>Titre article 2</h2>
                            </header>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec maximus lacus in erat ultrices, quis ultrices justo aliquam. Nam placerat eleifend nisi. Pellentesque a vulputate nisi. Cras rutrum odio a condimentum vehicula. Sed vel velit et orci porta imperdiet. Donec imperdiet diam quis leo porta, fringilla efficitur ex placerat. Vestibulum vehicula lacus id ultricies semper.</p>
                            <a href="./fullNews.php">Lire plus</a>
                            <footer>
                                <a class="adminButton" href="./newsUpdate.php?type=edition&name=Titre_Article_2"><i class="fa fa-pencil"></i>Editer</a>
                                <a class="adminButton" href="./newsUpdate.php?type=deletion"><i class="fa fa-trash"></i>Supprimer</a>
                                <p>10 octobre 2023</p>
                            </footer>
                        </article>
                    </div>
                </details>
            </section>
        </main>
        <?php require("inc/footer.inc.php"); ?>
    </body>
</html>