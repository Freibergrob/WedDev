<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="author" content="The Group">
		<meta name="description" content="CS Club">
		<meta name="keywords" content="IT,Social,Programming">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name=“robots” content=“noindex, nofollow” />
        <link rel="stylesheet" href="css/index.css">
		<link rel="stylesheet" href="css/events.css">
		<link rel="stylesheet" href="css/aboutUsPage.css">
		<link rel="stylesheet" href="css/account.css">
		<link rel="stylesheet" href="css/home.css">
		<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<title>Computer Science Club</title>
	</head>
	<body>
		<?php
    	include "php/nav.php";

    	if (!isset($_GET["nav"])) {
        	$N = getInclude("home");
			$contentWindowClass = "content-window-home";
    	} else {
            $N = getInclude($_GET["nav"]);
			$contentWindowClass = "content-window-" . $_GET["nav"];
        }
    	?>
		<div class="main">
			<div class="main-top">
				<div class="logo-wrapper">
					<div class="logo-float">
						<a href="index.php">
							<img src="images/CSIcon.png" alt="CSIcon" width="125">
						</a>
					</div>
				</div>
				<div class="banner-container">
					<img src="images/bannerc.jpg" alt="Banner">
				</div>
				<div class="first">
		        	UW-Oshkosh Computer Science Club
		    	</div>
				<div class="nav">
		        	<a class="nav-link" href="index.php?nav=home">Home</a>
		        	<a class="nav-link" href="index.php?nav=about">About Us</a>
		            <a class="nav-link" href="index.php?nav=events">Events</a>
	        		<a class="nav-link" href="index.php?nav=account">Account</a>
		    	</div>
			</div>
    		<div id="content-window" class=<?= $contentWindowClass ?>>
        		<?php include $N ?>
			</div>
        	<p>
				Disclaimer: This site is under development by UW-Oshkosh students as a prototype for
				the organization UWO Computer Science Club.<br>
				Nothing on the site should be construed in any way as being officially connected with
				or representative of UWO Computer Science Club.
			</p>
		</div>
    </body>
</html>
