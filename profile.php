<!DOCTYPE html>
<html lang="fr">
    <?php
        $title = 'Profile';
        require("inc/header.inc.php");
        require("./php/db_account.php");
        use DB\User;

        if (isset($_GET["mode"])) {
            switch($_GET["mode"]) {
                case "disconnect":
                    User::logout();
                    header("Location: ./");
                    break;
            }
        }
    ?>
    <body>
        <?php
            $pageName = 'profile';
            require("inc/nav.inc.php");
        ?>
        <main>
            <section class="usefulLinks">
                <h1>PROFILE</h1>
                <hr>
            </section>
            <section>
                <form action="./profile.php" method="get">
                    <input type="hidden" name="mode" value="disconnect"></input>
                    <button type="submit">Se déconnecter</button>
                </form>
                <form action="./profile.php" method="get">
                    <input type="hidden" name="mode" value="disconnect"></input>
                    <button type="submit">Réinitialiser mon mot de passe</button>
                </form>
            </section>
        </main>
        <?php require("inc/footer.inc.php"); ?>
    </body>
</html>