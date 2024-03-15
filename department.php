<!DOCTYPE html>
<html lang="fr">
    <?php
        $title = 'Départements';
        require("inc/header.inc.php");
    ?>
    <body>
        <?php
            $pageName = 'department';
            require("inc/nav.inc.php");
        ?>
        <main>
            <section class="usefulLinks">
                <h1>DEPARTEMENTS</h1>
                <hr>
                <?php
                    if(isset($_SESSION["user"])) 
                        echo '<a class="adminButton" href="./update.php?type=department&mode=addition"><i class="fa fa-plus"></i> Ajouter un département</a>';
                ?>
            </section>
            <section>
                <div class="cardsContainer">
                    <?php
                        require("./php/db_department.php");
                        use DB\Department;
                        
                        /* Get the datas from the database */
                        foreach (Department::getDepartments() as $department) {
                            echo '<article>
                                <header><h2>' . $department->nameDepartment . '</h2></header>
                                <p><span>Objectifs :</span><br>' . $department->descDepartment . '</p>
                                <footer>';
                                if(isset($_SESSION["user"])) {
                                    echo '<a class="adminButton" href="./update.php?type=department&mode=edition&name='. $department->nameDepartment .'"><i class="fa fa-pencil"></i>Editer</a>
                                    <a class="adminButton" href="./update.php?type=department&mode=deletion&name='. $department->nameDepartment .'"><i class="fa fa-trash"></i>Supprimer</a>';
                                }
                                echo'</footer>
                            </article>';
                        }
                    ?>
                </div>
            <section>
        </main>
        <?php require("inc/footer.inc.php"); ?>
    </body>
</html>