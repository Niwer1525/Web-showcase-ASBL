<?php
    require_once("./php/util.php");
    use Utils\Util;

    /* Saving filtering data as cookies */
    if(isset($_GET["searchDepartmentResult"]))
        setcookie("search_department", htmlspecialchars($_GET["searchDepartmentResult"]), time() + 3600, Util::getCookiesPath());

    if(isset($_GET["searchResult"]))
        setcookie("search_content", htmlspecialchars($_GET["searchResult"]), time() + 3600, Util::getCookiesPath());
?>
<section class="searchBox">
    <form <?php 'action="../.php'.$pageName.'"' ?> method="get">
        <label for="search" class="searchLabel">Rechercher</label>
        <input id="search" name="searchResult" type="text" placeholder="livres, achat" 
            <?php 
                $search = isset($_GET["searchResult"]) ? htmlspecialchars($_GET["searchResult"]) : (isset($_COOKIE["search_content"]) ? htmlspecialchars($_COOKIE["search_content"]) : "");
                echo 'value="'.$search.'"';
            ?>
        >
        <select id="department" name="searchDepartmentResult">
            <?php 
                require_once("./php/db_department.php");
                use DB\Department;
                
                $search = isset($_GET["searchDepartmentResult"]) ? htmlspecialchars($_GET["searchDepartmentResult"]) : (isset($_COOKIE["search_department"]) ? htmlspecialchars($_COOKIE["search_department"]) : null);
                echo Department::printDepartmentOptions($search);
            ?>
        </select>
        <button type="submit" class="searchButton"><i class="fa fa-search"></i></button>
    </form>
</section>