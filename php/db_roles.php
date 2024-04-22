<?php
namespace Main;

/* Required files */
require_once("./inc/db_link.inc.php");

/* Imports */
use DB\DBLink;

class Role {
    const TABLE_NAME = "devweb_roles";
    public $nameRole = "";
    
    /**
     * Get all the roles
     */
    public static function getRoles() {
        $db = DBLink::connect2db(MYDB, $message); // Connect to the database
        $sql = "SELECT * FROM " . self::TABLE_NAME; // SQL query
        
        $result = $db->execute_query($sql); // Execute the query
        $roles = [];
        while ($row = $result->fetch_assoc()) {
            $role = new Role();
            $role->nameRole = $row['nameRole'];
            $roles[] = $role;
        }

        DBLink::disconnect($db); // Disconnect from the database
        return $roles;
    }

    /**
     * Get a role by its name
     * @param string $name The name of the role
     */
    public static function getRole($name) {
        $db = DBLink::connect2db(MYDB, $message); // Connect to the database

        $name = $db->real_escape_string($name); // Escape special characters in the values

        $sql = "SELECT * FROM " . self::TABLE_NAME . " WHERE nameRole = '" . $name . "'"; // SQL query     
        $result = $db->execute_query($sql); // Execute the query
        $row = $result->fetch_assoc();

        $role = new Role();
        $role->nameRole = $row['nameRole'];

        DBLink::disconnect($db); // Disconnect from the database
        return $departmenmembert;
    }

    /**
     * Print the options for roles (Used in the edition/creation of a member)
     * @param string $name The name of the role to select
     */
    public static function printRoleOptions($name) {
        foreach(Role::getRoles() as $role) {
            echo'<option value="'.$role->nameRole.'" '.(isset($name) && $role->nameRole == $name ? 'selected="selected"' : '').'>'.$role->nameRole.'</option>';
        }
    }
}
?>