<?php
    require_once("./php/db_department.php");
    use DB\Department;

    /* Modes constants */
    const ADDITION = "addition";
    const EDITION = "edition";
    const DELETION = "deletion";

    /* Type constants */
    const NEWS = "news";
    const DEPARTMENT = "department";
    const MEMBER = "member";
    
    $type = $_POST["type"]; // Can be : "news", "department" or "member"
    $mode = $_POST["mode"]; // Can be : "addition", "edition" or "deletion"

    switch($type) {
        case NEWS:
            switch($mode) {
                case ADDITION:
                    if(isset($_POST["name"]) && isset($_POST["date"]) && isset($_POST["content"]) && isset($_POST["intro"]) && isset($_POST["department"]) && isset($_POST["image"]))
                        Article::createArticle($_POST["name"], $_POST["date"], $_POST["content"], $_POST["intro"], $_POST["department"], $_POST["visibility"], base64_encode(file_get_contents($_FILES["image"]["tmp_name"])));
                    break;
                case EDITION:
                    break;
                case DELETION:
                    break;
            }
            header("Location: ./news.php"); // Redirect to the news page
            break;
        case DEPARTMENT:
            switch($mode) {
                case ADDITION:
                    if(isset($_POST["department_name"]) && isset($_POST["department_objective"]))
                        DEPARTMENT::createDepartment($_POST["department_name"], $_POST["department_objective"]);
                    break;
                case EDITION:
                    if(isset($_POST["department_name"]) && isset($_POST["department_objective"]))
                        DEPARTMENT::updateDepartment($_POST["department_name"], $_POST["department_objective"]);
                    break;
                case DELETION:
                    if(isset($_POST["name"]))
                        DEPARTMENT::deleteDepartment($_POST["name"]);
                    break;
            }
            header("Location: ./department.php"); // Redirect to the department page
            break;
        case MEMBER:
            switch($mode) {
                case ADDITION:
                    break;
                case EDITION:
                    break;
                case DELETION:
                    break;
            }
            header("Location: ./team.php"); // Redirect to the team page
            break;
    }
?>