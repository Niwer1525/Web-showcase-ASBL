<?php
class Department {
    const TABLE_NAME = "department";

    public static function getDepartments() {
        $db = DBLink::connect2db(MYDB, $message); // Connect to the database
        $sql = "SELECT * FROM " . self::TABLE_NAME; // SQL query

        DBLink::disconnect($db); // Disconnect from the database
        return $db->query($sql);
    }
}
?>