<?php
    require_once("./php/util.php");
    use Utils\Util;
?>
<header class="nav-bar">
    <nav>
        <ul>
            <li><a href="./index.php" <?php Util::printClass($pageName, 'index'); ?>>Accueil</a><i class="fa fa-home phoneHeaderIcon"></i></li>
            <li><a href="./news.php" <?php Util::printClass($pageName, 'news'); ?>>Actualités</a><i class="fa fa-envelope phoneHeaderIcon"></i></li>
            <li><a href="./team.php" <?php Util::printClass($pageName, 'team'); ?>>Notre équipe</a><i class="fa fa-people-group phoneHeaderIcon"></i></li>
            <li><a href="./department.php" <?php Util::printClass($pageName, 'department'); ?>>Départements</a><i class="fa fa-building phoneHeaderIcon"></i></li>
            <li><a href="./contact.php" <?php Util::printClass($pageName, 'contact'); ?>>Contact</a><i class="fa fa-phone phoneHeaderIcon"></i></li>
            <li>
                <?php
                    require_once("./php/db_account.php");
                    use DB\User;
                    
                    if (isset($_SESSION["devweb_user"])) {
                        echo '<a href="./profile.php" ';
                        Util::printClass($pageName, 'profile');
                        echo'>';
                        if(!isset($_SESSION["devweb_user"]) || !is_string($_SESSION["devweb_user"])) echo'Unknown';
                        else {
                            $user = unserialize($_SESSION["devweb_user"]);
                            echo $user->nameUser . ' ' . $user->lastnameUser;
                        }
                    } else {
                        echo '<a href="./identification.php" ';
                        Util::printClass($pageName, 'identification');
                        echo'>Se connecter';
                    }
                    echo' <i class="fa fa-user"></i></a>';
                ?>
            </li>
        </ul>
    </nav>
</header>