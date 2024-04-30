<!DOCTYPE html>
<html lang="fr">
    <?php
        $title = 'Départements';
        require_once("./inc/header.inc.php");
    ?>
    <body>
        <?php
            $pageName = 'department';
            require_once("./inc/nav.inc.php");
        ?>
        <main>
            <section class="subHeader">
                <h1>DÉPARTEMENTS</h1>
                <hr>
                <?php
                    if(isset($_SESSION["devweb_user"])) 
                        echo '<a class="adminButton" href="./update.php?type=department&mode=addition"><i class="fa fa-plus"></i> Ajouter un département</a>';
                ?>
            </section>
            <section>
                <div class="cardsContainer">
                    <?php
                        require_once("./php/db_department.php");
                        use DB\Department;
                        
                        /* Get the datas from the database */
                        foreach (Department::getDepartments() as $department) {
                            echo '<article>
                                <header><h2>' . $department->nameDepartment . '</h2></header>
                                <p><span>Objectifs :</span><br>' . $department->descDepartment . '</p>
                                <footer>';
                                if(isset($_SESSION["devweb_user"])) {
                                    echo '<a class="adminButton" href="./update.php?type=department&mode=edition&id='. $department->id .'"><i class="fa fa-pencil"></i>Editer</a>
                                    <a class="adminButton" href="./update.php?type=department&mode=deletion&id='. $department->id .'"><i class="fa fa-trash"></i>Supprimer</a>';
                                }
                                echo'</footer>
                            </article>';
                        }
                    ?>
                </div>
            </section>
        </main>
        <?php require_once("./inc/footer.inc.php"); ?>
    </body>
</html>