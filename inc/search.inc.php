<section class="searchBox">
    <form <?php 'action="../.php'.$pageName.'"' ?> method="get">
        <label for="search" class="searchLabel">Rechercher</label>
        <input id="search" name="searchResult" type="text" placeholder="livres, achat" <?php 'value="'.(isset($_GET["searchResult"]) ? $_GET["searchResult"] : '').'"' ?>>
        <select id="department" name="searchDepartmentResult">
            <?php 
                require_once("./php/db_department.php");
                use DB\Department;
                Department::printDepartmentOptions(isset($_GET["searchDepartmentResult"]) ? null : $_GET["searchDepartmentResult"]);
            ?>
        </select>
        <button type="submit" class="searchButton"><i class="fa fa-search"></i></button>
    </form>
</section>