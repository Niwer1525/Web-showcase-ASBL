<!DOCTYPE html>
<html lang="fr">
    <?php
        $title = 'Equipe';
        require("inc/header.inc.php");
    ?>
    <body>
        <?php
            $pageName = 'team';
            require("inc/nav.inc.php");
        ?>
        <main>
            <section class="usefulLinks">
                <h1>NOTRE EQUIPE</h1>
                <hr>
                <?php
                    if(isset($_SESSION["user"])) 
                        echo '<a class="adminButton" href="./update.php?type=member&mode=addition"><i class="fa fa-plus"></i> Ajouter un membre</a>';
                ?>
            </section>
            <?php require("inc/search.inc.php"); ?>
            <section>
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
                                <a class="adminButton" href="./teammateUpdate.php?type=edition&name=GLUTEN_Vladimir"><i class="fa fa-pencil"></i>Editer</a>
                                <a class="adminButton" href="./teamUpdate.php?type=deletion"><i class="fa fa-trash"></i>Supprimer</a>
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
                                <a class="adminButton" href="./teammateUpdate.php?type=edition&name=MULLER_Joseph"><i class="fa fa-pencil"></i>Editer</a>
                                <a class="adminButton" href="./teamUpdate.php?type=deletion"><i class="fa fa-trash"></i>Supprimer</a>
                            </footer>
                        </article>
                        <!-- Generic -->
                        <article class="teamMember">
                            <header>
                                <img src="./images/article1.jpg" alt="Image article 1">
                                <h3>PASTA Livia</h3>
                            </header>
                            <ul>
                                <li><span>Administratrice site internet</span></li>
                                <li>...</li>
                            </ul>
                            <footer>
                                <a class="adminButton" href="./teammateUpdate.php?type=edition&name=PASTA_Livia><i class="fa fa-pencil"></i>Editer</a>
                                <a class="adminButton" href="./teamUpdate.php?type=deletion"><i class="fa fa-trash"></i>Supprimer</a>
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
                                <a class="adminButton" href="./teammateUpdate.php?type=edition&name=DUPRE_Sylvia><i class="fa fa-pencil"></i>Editer</a>
                                <a class="adminButton" href="./teamUpdate.php?type=deletion"><i class="fa fa-trash"></i>Supprimer</a>
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
                                <a class="adminButton" href="./teammateUpdate.php?type=edition&name=SABBATINI_Isabella><i class="fa fa-pencil"></i>Editer</a>
                                <a class="adminButton" href="./teamUpdate.php?type=deletion"><i class="fa fa-trash"></i>Supprimer</a>
                            </footer>
                        </article>
                    </div>
                </details>
            </section>
        </main>
        <?php require("inc/footer.inc.php"); ?>
    </body>
</html>