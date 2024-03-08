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
    public $nameRole = "";

    public static function getMembers() {
        $db = DBLink::connect2db(MYDB, $message);
        $sql = "SELECT * FROM " . self::TABLE_NAME;

        $result = $db->query($sql);
        $members = [];
        while ($row = $result->fetch_assoc()) {
            $member = new Member();
            $member->nameMember = $row["nameMember"];
            $member->lastNameMember = $row["lastNameMember"];
            $member->emailMember = $row["emailMember"];
            $member->nameRole = $row["nameRole"];
            $members[] = $member;
        }

        DBLink::disconnect($db); // Disconnect from the database
        return $members;
    }
}

class User {
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

        $result = $db->query($sql);
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
        $addressUser = $db->real_escape_string($addressUser); // Escape the addressUser value
        
        $sql = "INSERT INTO " . self::TABLE_NAME . " (nameUser, lastnameUser, ageUser, emailUser, passwordUser, addressUser) VALUES ('".$nameUser."', '".$lastnameUser."', '".$ageUser."', '".$emailUser."', '".$passwordUser."', '".$addressUser."')";
       
        $db->query($sql);
        DBLink::disconnect($db); // Disconnect from the database
    }

    public static function login($emailUser, $passwordUser) {
        $db = DBLink::connect2db(MYDB, $message);
        $emailUser = $db->real_escape_string($emailUser); // Escape the emailUser value
        $passwordUser = $db->real_escape_string($passwordUser); // Escape the passwordUser value
        $sql = "SELECT * FROM " . self::TABLE_NAME . " WHERE emailUser = '".$emailUser."' AND passwordUser = '".$passwordUser."'";
        
        $result = $db->query($sql);
        $row = $result->fetch_assoc();
        
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
}

class Role {
    const TABLE_NAME = "devweb_roles";
    public $nameRole = "";

    public static function getRoles() {
        $db = DBLink::connect2db(MYDB, $message);
        $sql = "SELECT * FROM " . self::TABLE_NAME;

        $result = $db->query($sql);
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