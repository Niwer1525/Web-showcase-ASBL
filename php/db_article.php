<?php
namespace DB;

/* Required files */
require_once("./inc/db_link.inc.php");

/* Imports */
use DB\DBLink;

class Article {
    const TABLE_NAME = "devweb_articles";
    public $id = 0;
    public $nameArticle = "";
    public $datePublicationArticle = "";
    public $imageArticle = "";
    public $contentArticle = "";
    public $introArticle = "";
    public $department = "";
    public $visibility = "";

    /**
     * Get all the articles
     */
    public static function getArticles() {
        $db = DBLink::connect2db(MYDB, $message); // Connect to the database
        $sql = "SELECT * FROM " . self::TABLE_NAME; // SQL query

        $result = $db->execute_query($sql); // Execute the query
        $articles = [];

        while ($row = $result->fetch_assoc()) {
            $article = new Article();
            $article->id = $row['id'];
            $article->nameArticle = $row['nameArticle'];
            $article->datePublicationArticle = strftime('%d/%m/%Y', strtotime($row['datePublicationArticle']));
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
     * Get all the articles from a department
     * @param string $departmentName The name of the department
     */
    public static function getArticlesByDepartment($departmentName) {
        $db = DBLink::connect2db(MYDB, $message); // Connect to the database

        $departmentName = $db->real_escape_string($departmentName); // Escape special characters in the values

        $sql = "SELECT * FROM " . self::TABLE_NAME . " WHERE department = '".$departmentName."' ORDER BY datePublicationArticle DESC"; // SQL query
        $result = $db->execute_query($sql); // Execute the query
        $articles = [];

        while ($row = $result->fetch_assoc()) {
            $article = new Article();
            $article->id = $row['id'];
            $article->nameArticle = $row['nameArticle'];
            $article->datePublicationArticle = strftime('%d/%m/%Y', strtotime($row['datePublicationArticle']));
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
        $sql = "SELECT * FROM " . self::TABLE_NAME . " WHERE visibility = 0 ORDER BY datePublicationArticle DESC LIMIT 2"; // SQL query

        $result = $db->execute_query($sql); // Execute the query
        $articles = [];

        while ($row = $result->fetch_assoc()) {
            $article = new Article();
            $article->id = $row['id'];
            $article->nameArticle = $row['nameArticle'];
            $article->datePublicationArticle = strftime('%d/%m/%Y', strtotime($row['datePublicationArticle']));
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
     * Get an article by its id
     * @param string $id The id of the article
     */
    public static function getArticle($id) {
        $db = DBLink::connect2db(MYDB, $message); // Connect to the database
        
        $id = $db->real_escape_string($id); // Escape special characters in the values
        
        $sql = "SELECT * FROM " . self::TABLE_NAME . " WHERE id = '".$id."'"; // Corrected SQL query
        $result = $db->execute_query($sql); // Execute the query
        $row = $result->fetch_assoc();
        $article = new Article();
        $article->id = $row['id'];
        $article->nameArticle = $row['nameArticle'];
        $article->datePublicationArticle = strftime('%d/%m/%Y', strtotime($row['datePublicationArticle']));
        $article->imageArticle = $row['imageArticle'];
        $article->contentArticle = $row['contentArticle'];
        $article->introArticle = $row['introArticle'];
        $article->department = $row['department'];
        $article->visibility = $row['visibility'];
        
        DBLink::disconnect($db); // Disconnect from the database
        return $article;
    }

    public static function createArticle($nameArticle, $datePublicationArticle, $contentArticle, $introArticle, $department, $visibility, $imageArticle) {
        $db = DBLink::connect2db(MYDB, $message); // Connect to the database

        // Escape special characters in the values
        $nameArticle = $db->real_escape_string($nameArticle);
        $datePublicationArticle = $db->real_escape_string(date('Y-m-d', strtotime($datePublicationArticle))); // Format the date value
        $contentArticle = $db->real_escape_string($contentArticle);
        $introArticle = $db->real_escape_string($introArticle);
        $department = $db->real_escape_string($department);
        $visibility = $db->real_escape_string($visibility);
        $imageArticle = $db->real_escape_string($imageArticle);

        $sql = "INSERT INTO " . self::TABLE_NAME . " (nameArticle, datePublicationArticle, contentArticle, introArticle, department, visibility, imageArticle) VALUES ('".$nameArticle."', '".$datePublicationArticle."', '".$contentArticle."', '".$introArticle."', '".$department."', '".$visibility."', '".$imageArticle."')"; // SQL query
        $db->execute_query($sql); // Execute the query
        DBLink::disconnect($db); // Disconnect from the database
    }

    public static function updateArticle($id, $nameArticle, $datePublicationArticle, $contentArticle, $introArticle, $department, $visibility, $imageArticle) {
        $db = DBLink::connect2db(MYDB, $message); // Connect to the database
        $sql = "";

        // Escape special characters in the values
        $id = $db->real_escape_string($id);
        $nameArticle = $db->real_escape_string($nameArticle);
        $datePublicationArticle = $db->real_escape_string($datePublicationArticle);
        $contentArticle = $db->real_escape_string($contentArticle);
        $introArticle = $db->real_escape_string($introArticle);
        $department = $db->real_escape_string($department);
        $visibility = $db->real_escape_string($visibility);
        $imageArticle = $db->real_escape_string($imageArticle);
        if($imageArticle != null) {
            $imageArticle = $db->real_escape_string($imageArticle);
            $sql = "UPDATE " . self::TABLE_NAME . " SET nameArticle = '".$nameArticle."', datePublicationArticle = '".$datePublicationArticle."', contentArticle = '".$contentArticle."', introArticle = '".$introArticle."', department = '".$department."', visibility = '".$visibility."', imageArticle = '".$imageArticle."' WHERE id = '".$id."'"; // SQL query
        } else 
            $sql = "UPDATE " . self::TABLE_NAME . " SET nameArticle = '".$nameArticle."', datePublicationArticle = '".$datePublicationArticle."', contentArticle = '".$contentArticle."', introArticle = '".$introArticle."', department = '".$department."', visibility = '".$visibility."' WHERE id = '".$id."'"; // SQL query

        $db->execute_query($sql); // Execute the query
        DBLink::disconnect($db); // Disconnect from the database
    }

    public static function deleteArticle($id) {
        $db = DBLink::connect2db(MYDB, $message); // Connect to the database

        // Escape special characters in the values
        $id = $db->real_escape_string($id);

        $sql = "DELETE FROM " . self::TABLE_NAME . " WHERE id = '".$id."'"; // SQL query
        $db->execute_query($sql); // Execute the query
        DBLink::disconnect($db); // Disconnect from the database
    }
}
?>