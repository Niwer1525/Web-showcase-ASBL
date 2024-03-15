<?php
namespace DB;
require_once('config.inc.php');
use mysqli;

class DBLink {
    /**
    * Se connecte à la base de données
    * @var string $base Nom de la base de données
    * @var string $message ensemble des messages à retourner à l'utilisateur, séparés par un saut de ligne
    * @return mysqli|FALSE Objet de liaison à la base de données ou false si erreur
    */
    public static function connect2db($base, &$message){
        $link = new mysqli(MYHOST, MYUSER, MYPASS, $base);
        $link->set_charset("utf8");
        if ($link->connect_errno) {
            $message .= $link->connect_error."(code:".$link->connect_errno.")<br>";
            return FALSE;
        } 
        return $link;
    }

    public static function disconnect(&$link) {
        // if ($link->ping()) $link->close();
    }
}