<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="author" content="The Group">
		<meta name="description" content="CS Club">
		<meta name="keywords" content="IT,Resume,Programming">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Computer Science Club</title>
	</head>
	<body>
        <!-- top stuff -->
        <p>
            This is always here
        </p>
        <div>
            <a href="index.php?nav=home">Home</a>
            <a href="index.php?nav=about">About Us</a>
            <a href="index.php?nav=events">Events</a>
            <a href="index.php?nav=account">Account</a>
        </div>
        <div>
            <?php
            if (!isset($_GET["nav"])) {
                include "home.php";
            }
            else if($_GET["nav"] == "home") {
                include "home.php";
            }
            else if ($_GET["nav"] == "about") {
                include "../aboutUsPage/_aboutUs.php";
            }
            else if ($_GET["nav"] == "events") {
                include "events.php";
            }
            else if ($_GET["nav"] == "account") {
                include "account.php";
            }
            ?>
        </div>
        <!-- bottom stuff -->
    </body>
</html>
