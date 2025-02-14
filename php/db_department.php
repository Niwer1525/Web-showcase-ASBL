<?php
namespace DB;

/* Required files */
require_once("./inc/db_link.inc.php");

/* Imports */
use DB\DBLink;

class Department {
    const TABLE_NAME = "devweb_departments";
    public $id = 0;
    public $nameDepartment = "";
    public $descDepartment = "";

    /**
     * Get all the departments
     */
    public static function getDepartments() {
        $db = DBLink::connect2db(MYDB, $message); // Connect to the database
        $sql = "SELECT * FROM " . self::TABLE_NAME; // SQL query

        $result = $db->execute_query($sql); // Execute the query
        $departments = [];

        while ($row = $result->fetch_assoc()) {
            $department = new Department();
            $department->id = $row['id'];
            $department->nameDepartment = $row['nameDepartment'];
            $department->descDepartment = $row['descDepartment'];
            $departments[] = $department;
        }

        DBLink::disconnect($db); // Disconnect from the database
        return $departments;
    }

    /**
     * Get a department by its id
     * @param string $id The id of the department
     */
    public static function getDepartment($id) {
        $db = DBLink::connect2db(MYDB, $message); // Connect to the database
        
        $id = $db->real_escape_string($id); // Escape special characters in the values

        $sql = "SELECT * FROM " . self::TABLE_NAME . " WHERE id = '" . $id . "'"; // SQL query     
        $result = $db->execute_query($sql); // Execute the query
        $row = $result->fetch_assoc();

        $department = new Department();
        $department->id = $row['id'];
        $department->nameDepartment = $row['nameDepartment'];
        $department->descDepartment = $row['descDepartment'];

        DBLink::disconnect($db); // Disconnect from the database
        return $department;
    }
    
    public static function updateDepartment($id, $nameDepartment, $descDepartment) {
        $db = DBLink::connect2db(MYDB, $message); // Connect to the database

        // Escape special characters in the values
        $id = $db->real_escape_string($id);
        $nameDepartment = $db->real_escape_string($nameDepartment);
        $descDepartment = $db->real_escape_string($descDepartment);

        $sql = "UPDATE " . self::TABLE_NAME . " SET nameDepartment = '$nameDepartment', descDepartment = '$descDepartment' WHERE id = '" . $id . "'"; // SQL query
        $db->execute_query($sql); // Execute the query
        DBLink::disconnect($db); // Disconnect from the database
    }

    public static function createDepartment($nameDepartment, $descDepartment) {
        $db = DBLink::connect2db(MYDB, $message); // Connect to the database
        
        // Escape special characters in the values
        $nameDepartment = $db->real_escape_string($nameDepartment);
        $descDepartment = $db->real_escape_string($descDepartment);
        
        $sql = "INSERT INTO " . self::TABLE_NAME . " (nameDepartment, descDepartment) VALUES ('$nameDepartment', '$descDepartment')"; // SQL query
        $db->execute_query($sql); // Execute the query
        DBLink::disconnect($db); // Disconnect from the database
    }

    public static function deleteDepartment($id) {
        $db = DBLink::connect2db(MYDB, $message); // Connect to the database

        $id = $db->real_escape_string($id); // Escape special characters in the values

        $sql = "DELETE FROM " . self::TABLE_NAME . " WHERE id = '" . $id . "'"; // SQL query
        $db->execute_query($sql); // Execute the query
        DBLink::disconnect($db); // Disconnect from the database
    }

    /**
     * Print the options of the departments (Used in the edition of a member or a news)
     * @param string $name The name of the department to select
     */
    public static function printDepartmentOptions($name) {
        echo'<option value="empty" '.(!isset($name) ? 'selected="selected"' : '').'>Aucun département</option>'; // Print the empty option
        foreach(Department::getDepartments() as $department) {
            echo'<option value="'.$department->nameDepartment.'" '.(isset($name) && $department->nameDepartment == $name ? 'selected="selected"' : '').'>'.$department->nameDepartment.'</option>';
        }
    }
}
?>