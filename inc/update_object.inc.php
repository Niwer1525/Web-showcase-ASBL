<?php
    require_once("./php/db_department.php");
    use DB\Department;

    $type = $_GET["type"]; // Can be : "news", "department" or "member"
    $mode = $_GET["mode"]; // Can be : "edition" or "deletion"

    switch($type) {
        case "news":
            switch($mode) {
                case "edition":
                    break;
                case "deletion":
                    break;
                case "creation":
                    break;
            }
            header("Location: ../news.php"); // Redirect to the news page
            break;
        case "department":
            switch($mode) {
                case "edition":
                    break;
                case "deletion":
                    break;
                case "creation":
                    break;
            }
            header("Location: ../department.php"); // Redirect to the department page
            break;
        case "member":
            switch($mode) {
                case "edition":
                    break;
                case "deletion":
                    break;
                case "creation":
                    break;
            }
            header("Location: ../team.php"); // Redirect to the team page
            break;
    }
?>