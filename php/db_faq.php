<?php
namespace DB;

/* Required files */
require_once("./inc/db_link.inc.php");

/* Imports */
use DB\DBLink;

class FaqQuestion {
    const TABLE_NAME = "devweb_faq";
    public $id = 0;
    public $question = "";
    public $reply = "";

    public static function getFaqQuestions() {
        $db = DBLink::connect2db(MYDB, $message); // Connect to the database
        $sql = "SELECT * FROM " . self::TABLE_NAME; // SQL query

        $result = $db->execute_query($sql); // Execute the query
        $questions = [];

        while ($row = $result->fetch_assoc()) {
            $question = new FaqQuestion();
            $question->id = $row['id'];
            $question->question = $row['question'];
            $question->reply = $row['reply'];
            $questions[] = $question;
        }

        DBLink::disconnect($db); // Disconnect from the database
        return $questions;
    }
}
?>