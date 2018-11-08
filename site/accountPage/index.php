<!DOCTYPE html>
<html lang="en">
	<head>
        <?php include "../config.php" ?>
		<meta charset="UTF-8">
		<meta name="author" content="The Group">
		<meta name="description" content="CS Club">
		<meta name="keywords" content="IT,Social,Programming">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name=“robots” content=“noindex, nofollow” />
        <link rel="stylesheet" type"=text/css" href="<?= $_PATHS['css'] . "account.css"?>">
        <link rel="stylesheet" type"=text/css" href="<?= $_PATHS['css'] . "index.css"?>">
        <link rel="stylesheet" type"=text/css" href="<?= $_PATHS['css'] . "events.css"?>">
        <link rel="stylesheet" type"=text/css" href="<?= $_PATHS['css'] . "aboutUsPage.css"?>">
        <link rel="stylesheet" type"=text/css" href="<?= $_PATHS['css'] . "home.css"?>">
		<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
		<title>Computer Science Club</title>
	</head>
	<body>
        <div class="main">
			<?php include $_PATHS['include_root'] . "header/_header.php"; ?>
    		<div id="content-window" class="content-window-account">
                <?php
                    session_start();
                    $loginerror = "";

                    if($_SERVER["REQUEST_METHOD"] == "POST") {
                        require_once $_PATHS['db'] . "config.php";
                        require_once $_PATHS['db'] . "user.php";
                        include $_PATHS['php'] . "loginProcess.php";
                    }

                    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
                        include $_PATHS['include_root'] . "accountPage/_loggedin.php";
                    } else {
                        $formPostUrl = $_PATHS['link'] . "accountPage/";
                        $showSignup = true;
                        include $_PATHS['include_root'] . "accountPage/_login.php";
                    }
                 ?>
			</div>
			<?php include $_PATHS['include_root'] . "footer/_footer.php" ?>
		</div>
    </body>
</html>
