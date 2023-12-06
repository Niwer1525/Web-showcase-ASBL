<?php
    $title = 'Accueil';
    include("inc/header.inc.php"); 
?>
<body>
    <header class="mainHeader">
        <nav>
            <img src="./images/logo.png" alt="Logo">
            <!-- The first (main) navigation -->
            <ul>
                <li><a href="./team.php">Notre équipe</a></li>
                <li><a href="./department.php">Départements</a></li>
                <li><a href="./contact.php">Contact</a></li>
                <li><a href="#news">Actualités</a></li>
                <li><a href="./identification.php">Se connecter <i class="fa fa-user"></i></a></li>
            </ul>
        </nav>
    </header>
    <main>
        <header class="nav-bar">
            <nav>
                <ul>
                    <li><a href="./index.php" class="currentPage">Acceuil</a></li>
                    <li><a href="./team.php">Notre équipe</a></li>
                    <li><a href="./department.php">Départements</a></li>
                    <li><a href="./contact.php">Contact</a></li>
                    <li><a href="./news.php">Actualités</a></li>
                    <li>
                        <a href="./identification.php">Se connecter <i class="fa fa-user"></i></a>
                    </li>
                </ul>
            </nav>
        </header>
        <!-- News section -->
        <section id="news" class="news">
            <div class="searchHeader">
                <h2>DERNIERE ACTUALITES</h2>
                <!-- Search container -->
                <div class="searchBox">
                    <button type="button"><span class="material-symbols-outlined">filter_alt</span></button>
                    <input type="text" placeholder="Rechercher une actualité">
                    <button type="button"><span class="material-symbols-outlined">search</span></button>
                </div>
            </div>
            <div class="cardsContainer">
                <!-- Latest article 1 -->
                <article>
                    <header>
                        <img src="./images/article1.jpg" alt="Image article 1">
                        <h3>Titre article 1</h3>
                    </header>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec maximus lacus in erat ultrices, quis ultrices justo aliquam. Nam placerat eleifend nisi. Pellentesque a vulputate nisi. Cras rutrum odio a condimentum vehicula. Sed vel velit et orci porta imperdiet. Donec imperdiet diam quis leo porta, fringilla efficitur ex placerat. Vestibulum vehicula lacus id ultricies semper.</p>
                    <a href="./fullNews.php">Lire plus</a>
                    <footer>
                        <p>20 octobre 2023</p>
                    </footer>
                </article>
                <!-- Latest article 2 -->
                <article>
                    <header>
                        <img src="./images/article1.jpg" alt="Image article 2">
                        <h3>Titre article 2</h3>
                    </header>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec maximus lacus in erat ultrices, quis ultrices justo aliquam. Nam placerat eleifend nisi. Pellentesque a vulputate nisi. Cras rutrum odio a condimentum vehicula. Sed vel velit et orci porta imperdiet. Donec imperdiet diam quis leo porta, fringilla efficitur ex placerat. Vestibulum vehicula lacus id ultricies semper.</p>
                    <a href="./fullNews.php">Lire plus</a>
                    <footer>
                        <p>10 octobre 2023</p>
                    </footer>
                </article>
            </div>
            <!-- View all news container and button -->
            <div class="seeAllNews">
                <a href="./news.php">Toute l'actualité</a>
            </div>
        </section>
        <!-- Description section -->
        <section>
            <h2>QUI SOMMES NOUS ?</h2>
            <p>Nous sommes <span>"Lumière du Savoir"</span>, une ASBL dédiée à l'éclairage des esprits des jeunes en leur offrant un accès à une bibliothèque de connaissances en ligne. Notre mission est de fournir des ressources éducatives de qualité, y compris des livres, des articles et des vidéos, pour aider les jeunes à apprendre et à grandir. Nous croyons que chaque enfant a le droit d'accéder à une éducation de qualité, et nous nous engageons à faire de cette vision une réalité. Ensemble, nous pouvons illuminer le chemin de l'apprentissage pour les générations futures.</p>
        </section>
    </main>
    <?php
        include("inc/footer.inc.php");
    ?>
</body>