<?php
    require './inc/db_link.inc.php';
    use DB\DBLink;
    
    $message = ""; 
    $bdd  = DBLink::connect2db(MYDB, $message);
    if ($bdd) {
        $message .= "Connexion à la base de données réussie!<br>";
    } else {
        $message .= "Impossible d'établir la connexion à la base de données!<br>";
    }
    $bdd->close();
    
    echo "<p>$message</p>";
?>