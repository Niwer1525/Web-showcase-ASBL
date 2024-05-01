<!DOCTYPE html>
<html lang="fr">
    <?php
        $title = 'Equipe';
        require_once("./inc/header.inc.php");
    ?>
    <body>
        <?php
            $pageName = 'team';
            require_once("./inc/nav.inc.php");
        ?>
        <main>
            <section class="subHeader">
                <h1>NOTRE ÉQUIPE</h1>
                <hr>
                <?php
                    if(isset($_SESSION["devweb_user"])) 
                        echo '<a class="adminButton" href="./update.php?type=member&mode=addition"><i class="fa fa-plus"></i> Ajouter un membre</a>';
                ?>
            </section>
            <?php require_once("./inc/search.inc.php"); ?>
            <section>
                <?php
                    require_once("./php/util.php");
                    require_once("./php/db_roles.php");
                    require_once("./php/db_account.php");
                    require_once("./php/db_department.php");
                    use Main\Role;
                    use DB\Member;
                    use DB\Department;
                    use Utils\Util;

                    $searchDepartmentResult = isset($_GET["searchDepartmentResult"]) && strcmp($_GET["searchDepartmentResult"], 'empty') ? htmlspecialchars($_GET["searchDepartmentResult"]) : null;
                    foreach(Department::getDepartments() as $department) {
                        if($searchDepartmentResult != null && !Util::search($searchDepartmentResult, $department->nameDepartment)) {
                            continue;
                        }
                        echo '<details open><summary>'.$department->nameDepartment.'</summary>
                            <div class="cardsContainer">';
                            $remCount = 0;
                            $searchResult = isset($_GET["searchResult"]) ? htmlspecialchars($_GET["searchResult"]) : null;
                            $members = Member::getMemberByDepartment($department->nameDepartment);
                            foreach($members as $member) {
                                if($searchResult != null && (
                                    !Util::search($searchResult, $member->nameMember)
                                    && !Util::search($searchResult, $member->lastNameMember)
                                    && !Util::search($searchResult, $member->workMember)
                                    && !Util::search($searchResult, $member->emailMember)
                                    && !Util::search($searchResult, $member->phoneMember)
                                    && !Util::search($searchResult, $member->descMember)
                                )) {
                                    continue;
                                }
                                echo'<article class="teamMembers">
                                    <header>
                                        <img src="./uploads/members/'.$member->id.'/'.$member->imageMember.'" alt="Photo de profile de '.$member->nameMember.' '.$member->lastNameMember.'">
                                        <h2>'.$member->nameMember.' '.$member->lastNameMember.'</h2>
                                    </header>
                                    <ul>
                                        <li>Rôle : <span>'.$member->nameRole.'</span></li>
                                        <li>Profession : <span>'.$member->workMember.'</span></li>
                                        <li>Addresse E-Mail : <span>'.$member->emailMember.'</span></li>
                                        <li>Numéro de téléphone : <span>'.$member->phoneMember.'</span></li>
                                        <li>Description : <span>'.$member->descMember.'</span></li>
                                    </ul>
                                    <footer>';
                                        if(isset($_SESSION["devweb_user"])) { //Very dangerous to use only the name of the member as a parameter
                                            echo '<a class="adminButton" href="./update.php?type=member&mode=edition&id='. $member->id .'"><i class="fa fa-pencil"></i>Editer</a>
                                            <a class="adminButton" href="./update.php?type=member&mode=deletion&id='. $member->id .'"><i class="fa fa-trash"></i>Supprimer</a>';
                                        }
                                echo'</footer></article>';
                            }
                            if(count($members) == $remCount)
                                echo '<p>Aucun membre trouvé</p>';
                        echo'</div></details>';
                    }
                ?>
            </section>
        </main>
        <?php require_once("./inc/footer.inc.php"); ?>
    </body>
</html>