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
    
    $id = htmlspecialchars($_POST["id"]);
    $type = htmlspecialchars($_POST["type"]); // Can be : "news", "department" or "member"
    $mode = htmlspecialchars($_POST["mode"]); // Can be : "addition", "edition" or "deletion"

    switch($type) {
        case NEWS:
            switch($mode) {
                case ADDITION:
                    $fileImage = file_get_contents($_FILES["news_image"]["tmp_name"]);
                    if(isset($_POST["news_title"]) && isset($_POST["news_date"]) && isset($_POST["news_message"]) 
                    && isset($_POST["news_primer"]) && isset($_POST["news_visibility"]) && isset($_POST["news_Department"]) 
                    && $fileImage != null) {
                        $fileImageName = basename($_FILES["news_image"]["name"]);
                        $targetPath = "./uploads/articles/".$id."/";
                        if (!file_exists($targetPath)) 
                            mkdir($targetPath, 0777, true); // Create the directory if it doesn't exist (0777 is the permission for the directory)
                        move_uploaded_file($_FILES["news_image"]["tmp_name"], $targetPath.$fileImageName);

                        /* Add the article */
                        Article::createArticle(
                            htmlspecialchars($_POST["news_title"]), 
                            htmlspecialchars($_POST["news_date"]),
                            htmlspecialchars($_POST["news_message"]),
                            htmlspecialchars($_POST["news_primer"]), 
                            htmlspecialchars($_POST["news_Department"]), 
                            htmlspecialchars($_POST["news_visibility"]),
                            htmlspecialchars($fileImageName)
                        );
                    }
                    break;
                case EDITION:
                    $fileImage = $_FILES["teammate_image"]["tmp_name"] ? file_get_contents($_FILES["news_image"]["tmp_name"]) : null;
                    if(isset($_POST["news_title"]) && isset($_POST["news_date"]) && isset($_POST["news_message"]) 
                    && isset($_POST["news_primer"]) && isset($_POST["news_visibility"]) && isset($_POST["news_Department"])) {
                        if($fileImage != null) {
                            $fileImageName = basename($_FILES["news_image"]["name"]);
                            $targetPath = "./uploads/articles/".$id."/";
                            if (!file_exists($targetPath)) 
                                mkdir($targetPath, 0777, true); // Create the directory if it doesn't exist (0777 is the permission for the directory)
                            move_uploaded_file($_FILES["news_image"]["tmp_name"], $targetPath.$fileImageName);
                        }

                        /* Add the article */
                        Article::updateArticle(
                            $id,
                            htmlspecialchars($_POST["news_title"]),
                            htmlspecialchars($_POST["news_date"]),
                            htmlspecialchars($_POST["news_message"]),
                            htmlspecialchars($_POST["news_primer"]),
                            htmlspecialchars($_POST["news_Department"]),
                            htmlspecialchars($_POST["news_visibility"]),
                            $fileImage != null ? htmlspecialchars($fileImageName) : null
                        );
                    }
                    break;
                case DELETION:
                    Util::deleteFolder("./uploads/articles/".$id."/");
                    Article::deleteArticle($id);
                    break;
            }
            header("Location: ./news.php"); // Redirect to the news page
            break;
        case DEPARTMENT:
            switch($mode) {
                case ADDITION:
                    if(isset($_POST["department_name"]) && isset($_POST["department_objective"]))
                        DEPARTMENT::createDepartment(htmlspecialchars($_POST["department_name"]), htmlspecialchars($_POST["department_objective"]));
                    break;
                case EDITION:
                    if(isset($_POST["department_name"]) && isset($_POST["department_objective"]))
                        DEPARTMENT::updateDepartment($id, htmlspecialchars($_POST["department_name"]), htmlspecialchars($_POST["department_objective"]));
                    break;
                case DELETION:
                    DEPARTMENT::deleteDepartment($id);
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
                    && isset($_POST["teammate_phone"]) && isset($_POST["teammate_description"]) && $fileImage != null) {
                        $fileImageName = basename($_FILES["teammate_image"]["name"]);
                        $targetPath = "./uploads/members/".$id."/";
                        if (!file_exists($targetPath)) 
                            mkdir($targetPath, 0777, true); // Create the directory if it doesn't exist (0777 is the permission for the directory)
                        move_uploaded_file($_FILES["teammate_image"]["tmp_name"], $targetPath.$fileImageName);

                        /* Add the article */
                        Member::createMember(
                            htmlspecialchars($_POST["teammate_first_name"]),
                            htmlspecialchars($_POST["teammate_name"]),
                            htmlspecialchars($_POST["teammate_email"]),
                            htmlspecialchars($_POST["teammate_work"]),
                            htmlspecialchars($_POST["teammate_department"]),
                            htmlspecialchars($_POST["teammate_role"]),
                            htmlspecialchars($fileImageName),
                            htmlspecialchars($_POST["teammate_phone"]),
                            htmlspecialchars($_POST["teammate_description"])
                        );
                    }
                    break;
                case EDITION:
                    $fileImage = $_FILES["teammate_image"]["tmp_name"] ? file_get_contents($_FILES["teammate_image"]["tmp_name"]) : null;
                    if(isset($_POST["teammate_name"]) && isset($_POST["teammate_first_name"]) && isset($_POST["teammate_work"]) 
                    && isset($_POST["teammate_role"]) && isset($_POST["teammate_department"]) && isset($_POST["teammate_email"])
                    && isset($_POST["teammate_phone"]) && isset($_POST["teammate_description"])) {
                        $fileImageName = "";
                        if($fileImage != null) {
                            $fileImageName = basename($_FILES["teammate_image"]["name"]);
                            $targetPath = "./uploads/members/".$id."/";
                            if (!file_exists($targetPath)) 
                                mkdir($targetPath, 0777, true); // Create the directory if it doesn't exist (0777 is the permission for the directory)
                            move_uploaded_file($_FILES["teammate_image"]["tmp_name"], $targetPath.$fileImageName);
                        }

                        /* Add the article */
                        Member::updateMember(
                            $id,
                            htmlspecialchars($_POST["teammate_first_name"]),
                            htmlspecialchars($_POST["teammate_name"]),
                            htmlspecialchars($_POST["teammate_email"]),
                            htmlspecialchars($_POST["teammate_work"]),
                            htmlspecialchars($_POST["teammate_department"]),
                            htmlspecialchars($_POST["teammate_role"]),
                            htmlspecialchars($fileImage != null ? $fileImageName : null),
                            htmlspecialchars($_POST["teammate_phone"]),
                            htmlspecialchars($_POST["teammate_description"])
                        );
                    }
                    break;
                case DELETION:
                    Util::deleteFolder("./uploads/".$id."/");
                    Member::deleteMember($id);
                    break;
            }
            header("Location: ./team.php"); // Redirect to the team page
            break;
    }
?>