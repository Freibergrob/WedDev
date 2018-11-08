<!DOCTYPE html>
<html lang="en">
	<head>
        <?php require_once "../config.php" ?>
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<title>Computer Science Club</title>
	</head>
	<body>
        <div class="main">
			<?php include $_PATHS['include_root'] . "header/_header.php"; ?>
    		<div id="content-window" class="content-window-account">
                <script src="<?=$_PATHS['js'] . "signup.js"?>"></script>
                <?php
                if($_SERVER["REQUEST_METHOD"] == "POST") {
                    require_once $_PATHS['db'] . "config.php";
                    require_once $_PATHS['db'] . "user.php";
                    require_once $_PATHS['php'] . "createUser.php";
                } else {
                ?>
                <form action="<?=$_PATHS['link'] . "signupPage/"?>" method="post" onsubmit="return validate()">
                    <div class="wrapper">
                        <h2>Sign Up</h2>
                        <p class="login">Please fill this form to create an account.</p>
                        <div class="form-group">
                            <label>Username</label>
                            <input id="username" type="text" name="username" class="form-control" required>
                            <span id="usernameErr"></span>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input id="password" type="password" name="password" class="form-control" required>
                            <span id="passwordErr"></span>
                        </div>
                        <div class="form-group">
                            <label class="confirm_password">Confirm Password</label>
                            <input id="confirm_password" type="password" name="confirm_password" class="form-control" required>
                            <span id="confirmErr"></span>
                        </div>
                        <div class="form-group button">
                            <input type="submit" class="btn btn-primary" value="Register">
                        </div>
                        <p class="login">Already have an account? <a href="<?=$_PATHS['link'] . "accountPage"?>">Login here</a>.</p>
                    </div>
                </form>
                <?php
                }
                 ?>

			</div>
			<?php include $_PATHS['include_root'] . "footer/_footer.php" ?>
		</div>
    </body>
</html>
