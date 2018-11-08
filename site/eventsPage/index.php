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
		<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="<?=$_PATHS['js'] . "events.js"?>"></script>
		<title>Computer Science Club</title>
	</head>
	<body>

        <div class="main">
			<?php include $_PATHS['include_root'] . "header/_header.php"; ?>
    		<div id="content-window" class="content-window-events">
			</div>
			<?php include $_PATHS['include_root'] . "footer/_footer.php" ?>
		</div>
    </body>
</html>
