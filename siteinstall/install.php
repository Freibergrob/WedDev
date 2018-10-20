<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="author" content="The Group">
		<meta name="description" content="CS Club Installation Script">
		<meta name="keywords" content="IT,Social,Programming">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Computer Science Club Installation</title>
	</head>
    <body>
        <?php
        include "config.php";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            include "sql/roles.php";
            include "sql/users.php";

            if($stmt = mysqli_prepare($link, "DROP TABLE users")){
                if(mysqli_stmt_execute($stmt)){
                    ?>
                    <p>Users table dropped!</p>
                    <?php
                } else {
                    ?>
                    <p>Failure occured dropping the Users table</p>
                    <?php
                }
            }

            if($stmt = mysqli_prepare($link, "DROP TABLE roles")){
                if(mysqli_stmt_execute($stmt)){
                    ?>
                    <p>Roles table dropped!</p>
                    <?php
                } else {
                    ?>
                    <p>Failure occured dropping the Roles table</p>
                    <?php
                }
            }

            if($stmt = mysqli_prepare($link, $rolesSQL)){
                if(mysqli_stmt_execute($stmt)){
                    ?>
                    <p>Roles table created!</p>
                    <?php
                } else {
                    ?>
                    <p>Failure occured creating the Roles table</p>
                    <?php
                }
            }

            if($stmt = mysqli_prepare($link, $usersSQL)){
                if(mysqli_stmt_execute($stmt)){
                    ?>
                    <p>Users table created!</p>
                    <?php
                } else {
                    ?>
                    <p>Failure occured creating the Users table</p>
                    <?php
                }
            }

            foreach($insert as $role) {
                if($stmt = mysqli_prepare($link, $role)){
                    if(mysqli_stmt_execute($stmt)){
                        ?>
                        <p>Role inserted!</p>
                        <?php
                    } else {
                        ?>
                        <p>Failure occured inserting role</p>
                        <?php
                    }
                }
            }
			?>
			<p>TODO: Update the config.php file in the site directory, if needed (located at "site/database")</p>
			<?php
        } else {
            ?>
            <p>
                This application is designed to restart the database for use with this website.<br>
                The following it the current configuration:<br>
                <?= getConfig() ?>
                <br>
				Note: it is advised that you remove this folder from your deployment after installation!<br>
                <strong>Are you sure this is what you want to do?</strong>
            </p>
            <form action="install.php" method="post">
                <input type="submit" name="confirm" value="Yes">
                <input type="submit" name="confirm" value="No">
            </form>
            <?php
        }
        ?>
    </body>
</html>
