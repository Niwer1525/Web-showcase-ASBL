<html lang="fr">
    <?php
        $title = 'Actualités';
        include("inc/header.inc.php");
    ?>
    <body>
        <?php
            include("inc/nav.inc.php");
        ?>
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
                        <!-- article 1 -->
                        <article>
                            <header>
                                <img src="./images/article1.jpg" alt="Image article 1">
                                <h3>Titre article 1</h3>
                            </header>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec maximus lacus in erat ultrices, quis ultrices justo aliquam. Nam placerat eleifend nisi. Pellentesque a vulputate nisi. Cras rutrum odio a condimentum vehicula. Sed vel velit et orci porta imperdiet. Donec imperdiet diam quis leo porta, fringilla efficitur ex placerat. Vestibulum vehicula lacus id ultricies semper.</p>
                            <footer>
                                <button type="button"><i class="fa fa-pencil"></i>Editer</button>
                                <button type="button"><i class="fa fa-trash"></i>Supprimer</button>
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
                            <footer>
                                <button type="button"><i class="fa fa-pencil"></i>Editer</button>
                                <button type="button"><i class="fa fa-trash"></i>Supprimer</button>
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
                            <footer>
                                <button type="button"><i class="fa fa-pencil"></i>Editer</button>
                                <button type="button"><i class="fa fa-trash"></i>Supprimer</button>
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
                            <footer>
                                <button type="button"><i class="fa fa-pencil"></i>Editer</button>
                                <button type="button"><i class="fa fa-trash"></i>Supprimer</button>
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
                            <footer>
                                <button type="button"><i class="fa fa-pencil"></i>Editer</button>
                                <button type="button"><i class="fa fa-trash"></i>Supprimer</button>
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