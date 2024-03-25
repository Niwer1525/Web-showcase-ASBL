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
                <?php
                    require_once("./php/db_roles.php");
                    require_once("./php/db_account.php");
                    require_once("./php/db_department.php");
                    use Main\Role;
                    use DB\Member;
                    use DB\Department;

                    foreach(Department::getDepartments() as $department) {
                        echo '<details open><summary>'.$department->nameDepartment.'</summary>
                            <div class="cardsContainer">';
                            foreach(Member::getMemberByDepartment($department->nameDepartment) as $member) {
                                echo'<article class="teamMembers">
                                    <header>
                                        <img src="./uploads/'.$member->nameMember.'_'.$member->lastNameMember.'/'.$member->imageMember.'" alt="Photo de profile de '.$member->nameMember.' '.$member->lastNameMember.'">
                                        <h2>'.$member->nameMember.' '.$member->lastNameMember.'</h2>
                                    </header>
                                    <ul>
                                        <li>Role: '.$member->nameRole.'</li>
                                        <li>Departement: '.$member->nameDepartment.'</li>
                                        <li>Profession: '.$member->workMember.'</li>
                                        <li>Addresse E-Mail: '.$member->emailMember.'</li>
                                    </ul>
                                    <footer>';
                                        if(isset($_SESSION["user"])) { //Very dangerous to use only the name of the member as a parameter
                                            echo '<a class="adminButton" href="./update.php?type=member&mode=edition&name='. $member->nameMember .'"><i class="fa fa-pencil"></i>Editer</a>
                                            <a class="adminButton" href="./update.php?type=member&mode=deletion&name='. $member->nameMember .'"><i class="fa fa-trash"></i>Supprimer</a>';
                                        }
                                echo'</footer></article>';
                            }
                        echo'</div></details>';
                    }
                ?>
            </section>
        </main>
        <?php require("inc/footer.inc.php"); ?>
    </body>
</html>