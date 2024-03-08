<?php
namespace DB;

/* Required files */
require_once("./inc/db_link.inc.php");

/* Imports */
use DB\DBLink;

class Department {
    const TABLE_NAME = "devweb_departments";
    public $nameDepartment = "";
    public $descDepartment = "";

    public static function getDepartments() {
        $db = DBLink::connect2db(MYDB, $message); // Connect to the database
        $sql = "SELECT * FROM " . self::TABLE_NAME; // SQL query

        $result = $db->query($sql); // Execute the query
        $departments = [];

        while ($row = $result->fetch_assoc()) {
            $department = new Department();
            $department->nameDepartment = $row['nameDepartment'];
            $department->descDepartment = $row['descDepartment'];
            $departments[] = $department;
        }

        DBLink::disconnect($db); // Disconnect from the database
        return $departments;
    }
    
    public static function deleteDepartment($nameDepartment) {
        $db = DBLink::connect2db(MYDB, $message); // Connect to the database
        $sql = "DELETE FROM " . self::TABLE_NAME . " WHERE nameDepartment = '" . $nameDepartment . "'"; // SQL query
        $db->query($sql); // Execute the query
        DBLink::disconnect($db); // Disconnect from the database
    }
}
?>