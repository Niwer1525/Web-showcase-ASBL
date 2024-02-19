<?php
    function printClass($expected, $current) {
        echo !strcasecmp($expected, $current) ? 'class="currentPage"' : '';
    }
?>
<header class="nav-bar">
    <nav>
        <ul>
            <li><a href="./index.php" <?php printClass($pageName, 'index'); ?>>Acceuil</a></li>
            <li><a href="./team.php" <?php printClass($pageName, 'team'); ?>>Notre équipe</a></li>
            <li><a href="./department.php" <?php printClass($pageName, 'department'); ?>>Départements</a></li>
            <li><a href="./contact.php" <?php printClass($pageName, 'contact'); ?>>Contact</a></li>
            <li><a href="./news.php" <?php printClass($pageName, 'news'); ?>>Actualités</a></li>
            <li>
                <a href="./identification.php" <?php printClass($pageName, 'identification'); ?>>Se connecter <i class="fa fa-user"></i></a>
            </li>
        </ul>
    </nav>
</header>