<!DOCTYPE html>
<html lang="fr">
    <?php
        $title = 'Article 1';
        require("inc/header.inc.php");
    ?>
    <body>
        <header class="nav-bar">
            <nav>
                <ul><li><a href="./news.php">Retour</a></li></ul>
            </nav>
        </header>
        <main>
            <section>
                <div class="cardsContainer">
                    <article class="largeArticle">
                        <header>
                            <img src="./images/article1.jpg" alt="Image article 1">
                            <h3>Article en entier (De : Recherche et Développement)</h3>
                        </header>
                        <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam metus eros, fermentum non auctor at, ornare ut tellus. Fusce in nulla nulla. Nam pulvinar augue eget tempus consectetur. Maecenas placerat luctus quam quis scelerisque. Nam id sapien quis tortor laoreet consectetur. Integer laoreet tortor non elit ullamcorper, nec consectetur turpis faucibus. Phasellus urna tellus, dignissim sit amet lectus vel, suscipit convallis sem. Curabitur ullamcorper sem ut sapien tempus vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Etiam ac dapibus nibh. Duis sed velit odio.
                        <br>
                        Sed hendrerit dui a ante gravida, vel facilisis lectus semper. Morbi ac lorem orci. Duis dui dolor, mattis ac accumsan at, dignissim in ligula. Donec pellentesque blandit lectus, at gravida quam gravida a. Sed efficitur viverra purus, in imperdiet nibh tempus nec. Nunc sit amet felis elit. Nulla tincidunt interdum dui non condimentum. Nullam vitae neque elementum, tristique nisl vitae, cursus nisi. Maecenas sed turpis est. Proin libero ex, placerat ut mattis et, bibendum sagittis erat. Praesent lacinia ultricies arcu feugiat tincidunt. Fusce vitae ligula lorem. Maecenas at semper dui. Aenean lacinia mi eu nisl aliquet porta. Integer quis tristique lorem.
                        <br>
                        Maecenas est urna, vehicula in lacinia eget, vestibulum nec lorem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis mauris eu mauris scelerisque convallis. Cras fringilla urna eu ullamcorper porttitor. Mauris quis posuere magna. In gravida leo ac commodo porta. Phasellus quis nulla erat. Maecenas interdum lacinia arcu in accumsan. Nulla magna est, faucibus a mattis eu, feugiat ullamcorper purus. Nunc efficitur, lorem nec aliquam aliquam, est libero scelerisque diam, at egestas nisl purus eu ipsum. Ut tincidunt, diam sit amet efficitur elementum, dui arcu auctor ex, sed venenatis ipsum diam at odio. Etiam non tincidunt eros, ut pulvinar mauris. Sed mi purus, varius vel pretium at, elementum vel nulla. Donec lacus leo, fringilla id orci quis, auctor pretium lorem. Sed at sem porttitor, facilisis libero ut, interdum ipsum. Integer consectetur porttitor est, et lobortis orci ultrices vel.
                        <br>
                        Nunc fringilla ut mauris eget interdum. Cras in consectetur quam, nec tristique leo. Aenean pharetra ligula at elit elementum, nec pharetra nisl aliquam. Donec ex ante, mattis non nulla at, luctus mollis ex. Nulla fringilla nec dui nec vehicula. Nunc a justo neque. Integer sed augue pharetra, fringilla arcu sed, accumsan nibh. Suspendisse enim mauris, volutpat sed consequat eget, porta in dolor. Ut ac ligula diam.
                        <br>
                        Vivamus auctor ligula vitae felis fringilla efficitur. Vestibulum pulvinar augue a ligula malesuada porta. Integer accumsan leo quis lacus ullamcorper porta. Praesent vel sem consequat, congue dolor sed, accumsan neque. Pellentesque ullamcorper velit sed orci rhoncus suscipit. Vivamus vulputate dapibus nisi in rhoncus. Cras vestibulum tristique massa, eu maximus metus commodo et. Quisque dapibus odio turpis, ut malesuada urna accumsan sit amet. Sed non venenatis sem. Sed sollicitudin sem sed lectus maximus, nec molestie mi iaculis. Nunc bibendum volutpat magna. Proin volutpat rhoncus facilisis. Etiam id posuere massa. Suspendisse at nisl nec ligula vulputate consectetur. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                        </p>
                        <footer>
                            <a class="adminButton" href="./newsUpdate.php?type=edition&name=Article_en_entier"><i class="fa fa-pencil"></i>Editer</a>
                            <a class="adminButton" href="./newsUpdate.php?type=deletion"><i class="fa fa-trash"></i>Supprimer</a>
                            <p>20 octobre 2023</p>
                        </footer>
                    </article>
                </div>
            </section>
        </main>
        <?php
            require("inc/footer.inc.php");
        ?>
    </body>
</html>