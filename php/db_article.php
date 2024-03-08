<?php
namespace DB;

/* Required files */
require_once("./inc/db_link.inc.php");

/* Imports */
use DB\DBLink;

class Article {
    const TABLE_NAME = "devweb_articles";
    public $nameArticle = "";
    public $datePublicationArticle = "";
    public $imageArticle = "";
    public $contentArticle = "";
    public $introArticle = "";
    public $department = "";
    public $visibility = "";

    public static function getArticles() {
        $db = DBLink::connect2db(MYDB, $message); // Connect to the database
        $sql = "SELECT * FROM " . self::TABLE_NAME; // SQL query

        $result = $db->query($sql); // Execute the query
        $articles = [];

        while ($row = $result->fetch_assoc()) {
            $article = new Article();
            $article->nameArticle = $row['nameArticle'];
            $article->datePublicationArticle = $row['datePublicationArticle'];
            $article->imageArticle = $row['imageArticle'];
            $article->contentArticle = $row['contentArticle'];
            $article->introArticle = $row['introArticle'];
            $article->department = $row['department'];
            $article->visibility = $row['visibility'];
            $articles[] = $article;
        }

        DBLink::disconnect($db); // Disconnect from the database
        return $articles;
    }

    /**
     * Get two of the most recent articles wich are visible for everyone
     */
    public static function getHomeArticle() {
        $db = DBLink::connect2db(MYDB, $message); // Connect to the database
        $sql = "SELECT * FROM " . self::TABLE_NAME . " WHERE visibility IS NULL ORDER BY datePublicationArticle DESC LIMIT 2"; // SQL query

        $result = $db->query($sql); // Execute the query
        $articles = [];

        while ($row = $result->fetch_assoc()) {
            $article = new Article();
            $article->nameArticle = $row['nameArticle'];
            $article->datePublicationArticle = date('d F Y', strtotime($row['datePublicationArticle']));
            $article->imageArticle = $row['imageArticle'];
            $article->contentArticle = $row['contentArticle'];
            $article->introArticle = $row['introArticle'];
            $article->department = $row['department'];
            $article->visibility = $row['visibility'];
            $articles[] = $article;
        }
        
        DBLink::disconnect($db); // Disconnect from the database
        return $articles;
    }

    public static function getArticle($name) {
        $db = DBLink::connect2db(MYDB, $message); // Connect to the database
        $sql = "SELECT * FROM " . self::TABLE_NAME . " WHERE nameArticle = '".$name."'"; // Corrected SQL query

        $result = $db->query($sql); // Execute the query
        $row = $result->fetch_assoc();
        $article = new Article();
        $article->nameArticle = $row['nameArticle'];
        $article->datePublicationArticle = date('d F Y', strtotime($row['datePublicationArticle']));
        $article->imageArticle = $row['imageArticle'];
        $article->contentArticle = $row['contentArticle'];
        $article->introArticle = $row['introArticle'];
        $article->department = $row['department'];
        $article->visibility = $row['visibility'];
        
        DBLink::disconnect($db); // Disconnect from the database
        return $article;
    }
}
?>