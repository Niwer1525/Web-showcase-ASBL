<?php
namespace DB;

/* Required files */
require_once("./inc/db_link.inc.php");

/* Imports */
use DB\DBLink;

class Member {
    const TABLE_NAME = "devweb_members";
    public $nameMember = "";
    public $lastNameMember = "";
    public $emailMember = "";
    public $workMember = "";
    public $nameDepartment = "";
    public $nameRole = "";
    public $imageMember = "";

    public static function getMember($nameMember) {
        $db = DBLink::connect2db(MYDB, $message);

        $nameMember = $db->real_escape_string($nameMember); // Escape the nameMember value

        $sql = "SELECT * FROM " . self::TABLE_NAME . " WHERE nameMember = '".$nameMember."'";
        $result = $db->execute_query($sql);
        $row = $result->fetch_assoc();
        $member = new Member();
        $member->nameMember = $row["nameMember"];
        $member->lastNameMember = $row["lastnameMember"];
        $member->emailMember = $row["emailMember"];
        $member->workMember = $row["workMember"];
        $member->nameDepartment = $row["nameDepartment"];
        $member->nameRole = $row["role"];
        $member->imageMember = $row["imageMember"];

        DBLink::disconnect($db); // Disconnect from the database
        return $member;
    }

    public static function getMemberByDepartment($nameDepartment) {
        $db = DBLink::connect2db(MYDB, $message);

        $nameDepartment = $db->real_escape_string($nameDepartment); // Escape the nameDepartment value

        $sql = "SELECT * FROM " . self::TABLE_NAME . " WHERE nameDepartment = '".$nameDepartment."' ORDER BY nameMember ASC";
        $result = $db->execute_query($sql);
        $members = [];
        while ($row = $result->fetch_assoc()) {
            $member = new Member();
            $member->nameMember = $row["nameMember"];
            $member->lastNameMember = $row["lastnameMember"];
            $member->emailMember = $row["emailMember"];
            $member->workMember = $row["workMember"];
            $member->nameDepartment = $row["nameDepartment"];
            $member->nameRole = $row["role"];
            $member->imageMember = $row["imageMember"];
            $members[] = $member;
        }

        DBLink::disconnect($db); // Disconnect from the database
        return $members;
    }

    public static function createMember($nameMember, $lastNameMember, $emailMember, $workMember, $nameDepartment, $role, $imageMember) {
        $db = DBLink::connect2db(MYDB, $message);
        $nameMember = $db->real_escape_string($nameMember); // Escape the nameMember value
        $lastNameMember = $db->real_escape_string($lastNameMember); // Escape the lastNameMember value
        $emailMember = $db->real_escape_string($emailMember); // Escape the emailMember value
        $workMember = $db->real_escape_string($workMember); // Escape the workMember value
        $nameDepartment = $db->real_escape_string($nameDepartment); // Escape the nameDepartment value
        $role = $db->real_escape_string($role); // Escape the role value
        $imageMember = $db->real_escape_string($imageMember); // Escape the role value

        $sql = "INSERT INTO " . self::TABLE_NAME . " (nameMember, lastnameMember, emailMember, workMember, nameDepartment, role, imageMember) VALUES ('".$nameMember."', '".$lastNameMember."', '".$emailMember."', '".$workMember."', '".$nameDepartment."', '".$role."', '".$imageMember."')";
        $db->execute_query($sql);
        DBLink::disconnect($db); // Disconnect from the database
    }

    public static function updateMember($nameMember, $lastNameMember, $emailMember, $workMember, $nameDepartment, $role, $imageMember) {
        $db = DBLink::connect2db(MYDB, $message);
        $sql = "";
        
        $nameMember = $db->real_escape_string($nameMember); // Escape the nameMember value
        $lastNameMember = $db->real_escape_string($lastNameMember); // Escape the lastNameMember value
        $emailMember = $db->real_escape_string($emailMember); // Escape the emailMember value
        $workMember = $db->real_escape_string($workMember); // Escape the workMember value
        $nameDepartment = $db->real_escape_string($nameDepartment); // Escape the nameDepartment value
        $nameRole = $db->real_escape_string($role); // Escape the role value
        if($imageMember != NULL) {
            $imageMember = $db->real_escape_string($imageMember); // Escape the role value
            $sql = "UPDATE " . self::TABLE_NAME . " SET lastnameMember = '".$lastNameMember."', emailMember = '".$emailMember."', workMember = '".$workMember."', nameDepartment = '".$nameDepartment."', role = '".$role."', imageMember = '".$imageMember."' WHERE nameMember = '".$nameMember."'";
        } else 
            $sql = "UPDATE " . self::TABLE_NAME . " SET lastnameMember = '".$lastNameMember."', emailMember = '".$emailMember."', workMember = '".$workMember."', nameDepartment = '".$nameDepartment."', role = '".$role."' WHERE nameMember = '".$nameMember."'";
        
        $db->execute_query($sql);
        DBLink::disconnect($db); // Disconnect from the database
    }

    /* VERRRRY DANGEROUS */
    public static function deleteMember($nameMember) {
        $db = DBLink::connect2db(MYDB, $message);
        $nameMember = $db->real_escape_string($nameMember); // Escape the nameMember value
        $sql = "DELETE FROM " . self::TABLE_NAME . " WHERE nameMember = '".$nameMember."'";
        $db->execute_query($sql);
        DBLink::disconnect($db); // Disconnect from the database
    }
}

class User {
    const SALT = "your_static_salt_value";
    const TABLE_NAME = "devweb_users";
    public $nameUser = "";
    public $lastnameUser = "";
    public $ageUser = 0;
    public $emailUser = "";
    public $passwordUser = "";
    public $addressUser = "";

    public static function getUsers() {
        $db = DBLink::connect2db(MYDB, $message);
        $sql = "SELECT * FROM " . self::TABLE_NAME;

        $result = $db->execute_query($sql);
        $users = [];
        while ($row = $result->fetch_assoc()) {
            $user = new User();
            $user->nameUser = $row["nameUser"];
            $user->lastnameUser = $row["lastnameUser"];
            $user->ageUser = $row["ageUser"];
            $user->emailUser = $row["emailUser"];
            $user->passwordUser = $row["passwordUser"];
            $user->addressUser = $row["addressUser"];
            $users[] = $user;
        }

        DBLink::disconnect($db); // Disconnect from the database
        return $users;
    }

    public static function createUser($nameUser, $lastnameUser, $ageUser, $emailUser, $passwordUser, $addressUser) {
        $db = DBLink::connect2db(MYDB, $message);
        $nameUser = $db->real_escape_string($nameUser); // Escape the nameUser value
        $lastnameUser = $db->real_escape_string($lastnameUser); // Escape the lastnameUser value
        $ageUser = $db->real_escape_string($ageUser); // Escape the ageUser value
        $emailUser = $db->real_escape_string($emailUser); // Escape the emailUser value
        $passwordUser = $db->real_escape_string($passwordUser); // Escape the passwordUser value
        // $passwordUser = password_hash($passwordUser, PASSWORD_DEFAULT, ['salt' => self::SALT]); // Hash the passwordUser value
        $addressUser = $db->real_escape_string($addressUser); // Escape the addressUser value
        
        $sql = "INSERT INTO " . self::TABLE_NAME . " (nameUser, lastnameUser, ageUser, emailUser, passwordUser, addressUser) VALUES ('".$nameUser."', '".$lastnameUser."', '".$ageUser."', '".$emailUser."', '".$passwordUser."', '".$addressUser."')";
       
        $db->execute_query($sql);
        DBLink::disconnect($db); // Disconnect from the database
    }

    public static function updateUser($nameUser, $lastnameUser, $ageUser, $emailUser, $passwordUser, $addressUser) {
        $db = DBLink::connect2db(MYDB, $message);
        
        $nameUser = $db->real_escape_string($nameUser); // Escape the nameUser value
        $lastnameUser = $db->real_escape_string($lastnameUser); // Escape the lastnameUser value
        $ageUser = $db->real_escape_string($ageUser); // Escape the ageUser value
        $emailUser = $db->real_escape_string($emailUser); // Escape the emailUser value
        $passwordUser = $db->real_escape_string($passwordUser); // Escape the passwordUser value
        // $passwordUser = password_hash($passwordUser, PASSWORD_DEFAULT, ['salt' => self::SALT]); // Hash the passwordUser value
        $addressUser = $db->real_escape_string($addressUser); // Escape the addressUser value
        $sql = "UPDATE " . self::TABLE_NAME . " SET lastnameUser = '".$lastnameUser."', ageUser = '".$ageUser."', emailUser = '".$emailUser."', passwordUser = '".$passwordUser."', addressUser = '".$addressUser."' WHERE nameUser = '".$nameUser."'";
        
        $db->execute_query($sql);
        DBLink::disconnect($db); // Disconnect from the database
    }

    public static function login($emailUser, $passwordUser) {
        $db = DBLink::connect2db(MYDB, $message);
        $emailUser = $db->real_escape_string($emailUser); // Escape the emailUser value
        $passwordUser = $db->real_escape_string($passwordUser); // Escape the passwordUser value
        // $passwordUser = password_hash($passwordUser, PASSWORD_DEFAULT, ['salt' => self::SALT]); // Hash the passwordUser value with a static salt
        $sql = "SELECT * FROM " . self::TABLE_NAME . " WHERE emailUser = '".$emailUser."' AND passwordUser = '".$passwordUser."'";
        
        $result = $db->execute_query($sql);
        $row = $result->fetch_assoc();
        
        if($row == NULL) {
            DBLink::disconnect($db); // Disconnect from the database
            return NULL;
        }
        $user = new User();
        $user->nameUser = $row["nameUser"];
        $user->lastnameUser = $row["lastnameUser"];
        $user->ageUser = $row["ageUser"];
        $user->emailUser = $row["emailUser"];
        $user->passwordUser = $row["passwordUser"];
        $user->addressUser = $row["addressUser"];

        DBLink::disconnect($db); // Disconnect from the database
        return $user;
    }

    public static function logout() {
        $_SESSION = array();
        setcookie("PHPSESSID", "", time()-3600, "/");
        session_destroy();
    }

    public static function getTempEmail() {
        // if (isset($_SESSION["temp_user"])) return $_SESSION["temp_user"]->emailUser;
        return "e.redote@student.helmo.be"; // For testing purposes
    }

    public static function getTempPassword() {
        // if (isset($_SESSION["temp_user"])) return $_SESSION["temp_user"]->passwordUser;
        return "passwordVisible"; // For testing purposes
    }
}

class Role {
    const TABLE_NAME = "devweb_roles";
    public $nameRole = "";

    public static function getRoles() {
        $db = DBLink::connect2db(MYDB, $message);
        $sql = "SELECT * FROM " . self::TABLE_NAME;

        $result = $db->execute_query($sql);
        $roles = [];

        while ($row = $result->fetch_assoc()) {
            $role = new Role();
            $role->nameRole = $row["nameRole"];
            $roles[] = $role;
        }
        DBLink::disconnect($db); // Disconnect from the database
        return $roles;
    }
}
?>