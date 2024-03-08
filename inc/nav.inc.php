<?php
    function printClass($expected, $current) {
        echo !strcasecmp($expected, $current) ? 'class="currentPage"' : '';
    }
?>
<header class="nav-bar">
    <nav>
        <ul>
            <li><a href="./index.php" <?php printClass($pageName, 'index'); ?>>Accueil</a></li>
            <li><a href="./news.php" <?php printClass($pageName, 'news'); ?>>Actualités</a></li>
            <li><a href="./team.php" <?php printClass($pageName, 'team'); ?>>Notre équipe</a></li>
            <li><a href="./department.php" <?php printClass($pageName, 'department'); ?>>Départements</a></li>
            <li><a href="./contact.php" <?php printClass($pageName, 'contact'); ?>>Contact</a></li>
            <li>
                <?php
                    require_once("./php/db_account.php");
                    use DB\User;

                    if (isset($_SESSION["user"])) {
                        echo '<a href="./profile.php" ';
                        printClass($pageName, 'profile');
                        echo'>';
                        if(!isset($_SESSION["user"]) || !is_string($_SESSION["user"])) echo'Unknown';
                        else {
                            $user = unserialize($_SESSION["user"]);
                            echo $user->nameUser . ' ' . $user->lastnameUser;
                        }
                        echo'<i class="fa fa-user"></i></a>';
                    } else {
                        echo '<a href="./identification.php" ';
                        printClass($pageName, 'identification');
                        echo'>Se connecter <i class="fa fa-user"></i></a>';
                    }
                ?>
            </li>
        </ul>
    </nav>
</header>