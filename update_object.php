<?php
    require_once("./php/util.php");
    require_once("./php/db_department.php");
    require_once("./php/db_article.php");
    require_once("./php/db_account.php");
    use DB\Department;
    use DB\Article;
    use DB\Member;
    use Utils\Util;

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
                    $fileImage = file_get_contents($_FILES["news_image"]["tmp_name"]);
                    if(isset($_POST["news_title"]) && isset($_POST["news_date"]) && isset($_POST["news_message"]) 
                    && isset($_POST["news_primer"]) && isset($_POST["news_visibility"]) && isset($_POST["news_Department"]) 
                    && $fileImage != null) {
                        $fileImageName = basename($_FILES["news_image"]["name"]);
                        $targetPath = "./uploads/".Util::computeNameForPath($_POST["news_title"])."/";
                        if (!file_exists($targetPath)) 
                            mkdir($targetPath, 0777, true); // Create the directory if it doesn't exist (0777 is the permission for the directory)
                        move_uploaded_file($_FILES["news_image"]["tmp_name"], $targetPath.$fileImageName);

                        /* Add the article */
                        Article::createArticle(
                            $_POST["news_title"], 
                            $_POST["news_date"],
                            $_POST["news_message"],
                            $_POST["news_primer"], 
                            $_POST["news_Department"], 
                            $_POST["news_visibility"], 
                            $fileImageName
                        );
                    }
                    break;
                case EDITION:
                    $fileImage = $_FILES["teammate_image"]["tmp_name"] ? file_get_contents($_FILES["news_image"]["tmp_name"]) : null;
                    if(isset($_POST["news_title"]) && isset($_POST["news_date"]) && isset($_POST["news_message"]) 
                    && isset($_POST["news_primer"]) && isset($_POST["news_visibility"]) && isset($_POST["news_Department"])) {
                        if($fileImage != null) {
                            $fileImageName = basename($_FILES["news_image"]["name"]);
                            $targetPath = "./uploads/".Util::computeNameForPath($_POST["news_title"])."/";
                            if (!file_exists($targetPath)) 
                                mkdir($targetPath, 0777, true); // Create the directory if it doesn't exist (0777 is the permission for the directory)
                            move_uploaded_file($_FILES["news_image"]["tmp_name"], $targetPath.$fileImageName);
                        }

                        /* Add the article */
                        Article::updateArticle(
                            $_POST["news_title"], 
                            $_POST["news_date"],
                            $_POST["news_message"],
                            $_POST["news_primer"], 
                            $_POST["news_Department"], 
                            $_POST["news_visibility"], 
                            $fileImage != null ? $fileImageName : null
                        );
                    }
                    break;
                case DELETION:
                    if(isset($_POST["name"])) {
                        Utill::deleteFolder("./uploads/".$_POST["name"]."/");
                        Article::deleteArticle($_POST["name"]);
                    }
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
                    $fileImage = file_get_contents($_FILES["teammate_image"]["tmp_name"]);
                    if(isset($_POST["teammate_name"]) && isset($_POST["teammate_first_name"]) && isset($_POST["teammate_work"]) 
                    && isset($_POST["teammate_role"]) && isset($_POST["teammate_department"]) && isset($_POST["teammate_email"]) 
                    && $fileImage != null) {
                        $fileImageName = basename($_FILES["teammate_image"]["name"]);
                        $targetPath = "./uploads/".Util::computeNameForPath($_POST["teammate_first_name"]." ".$_POST["teammate_name"])."/";
                        if (!file_exists($targetPath)) 
                            mkdir($targetPath, 0777, true); // Create the directory if it doesn't exist (0777 is the permission for the directory)
                        move_uploaded_file($_FILES["teammate_image"]["tmp_name"], $targetPath.$fileImageName);

                        /* Add the article */
                        Member::createMember(
                            $_POST["teammate_first_name"], 
                            $_POST["teammate_name"],
                            $_POST["teammate_email"],
                            $_POST["teammate_work"],
                            $_POST["teammate_department"],
                            $_POST["teammate_role"],
                            $fileImageName
                        );
                    }
                    break;
                case EDITION:
                    $fileImage = $_FILES["teammate_image"]["tmp_name"] ? file_get_contents($_FILES["teammate_image"]["tmp_name"]) : null;
                    if(isset($_POST["teammate_name"]) && isset($_POST["teammate_first_name"]) && isset($_POST["teammate_work"]) 
                    && isset($_POST["teammate_role"]) && isset($_POST["teammate_department"]) && isset($_POST["teammate_email"])) {
                        $fileImageName = "";
                        if($fileImage != null) {
                            $fileImageName = basename($_FILES["teammate_image"]["name"]);
                            $targetPath = "./uploads/".Util::computeNameForPath($_POST["teammate_first_name"].' '.$_POST["teammate_name"])."/";
                            if (!file_exists($targetPath)) 
                                mkdir($targetPath, 0777, true); // Create the directory if it doesn't exist (0777 is the permission for the directory)
                            move_uploaded_file($_FILES["teammate_image"]["tmp_name"], $targetPath.$fileImageName);
                        }

                        /* Add the article */
                        Member::updateMember(
                            $_POST["teammate_first_name"],
                            $_POST["teammate_name"],
                            $_POST["teammate_email"],
                            $_POST["teammate_work"],
                            $_POST["teammate_department"],
                            $_POST["teammate_role"],
                            $fileImage != null ? $fileImageName : null
                        );
                    }
                    break;
                case DELETION:
                    if(isset($_POST["teammate_name"])) {
                        Util::deleteFolder("./uploads/".Util::computeNameForPath($_POST["teammate_name"])."/");
                        Member::deleteMember($_POST["teammate_name"]);
                    }
                    break;
            }
            header("Location: ./team.php"); // Redirect to the team page
            break;
    }
?>