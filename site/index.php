<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<?php require_once "config.php" ?>
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
		<div class="main">
			<?php include "header/_header.php"; ?>
    		<div id="content-window" class="content-window-home">
				    <h3>Where we meet</h3>
				    <p> Our meeting room is Halsey 202. (Location can vary) </p>
				    <h3>Times</h3>
				    <p>We meet every Thursday, excluding holidays, at 5:00 p.m. (Times may vary)</p>
				    <h3>Learn more about us</h3>
				    <p>Dying to know more about us? You can find more about us <a href="index.php?nav=about">here</a>!</p>
				    <h3>Sales pitch </h3>
				    <p>Joining UW Oshkosh's Computer Science Club will give you so much, for just simply signing up.
				     You will meet people that are in your field, get hands on experience with different technology, solve a variety of programming problems
				     and you will have fun or your money back guaranteed!</p>
				     <h3>Link to signup</h3>
				     <p>Thinking about joining? Why not? Click <a href="<?=$_PATHS['link']?>signupPage">here</a> to sign up today! </p>
				     <h3>Next upcoming event</h3>
				     <p>Next Event:</p>
			</div>
			<?php include "footer/_footer.php" ?>
		</div>
    </body>
</html>
