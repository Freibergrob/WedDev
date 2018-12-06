<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<?php require_once "../config.php";
		      require_once $_PATHS['_meta.php']; ?>
		<link rel="stylesheet" href="<?=$_PATHS['forms.css']?>">
		<title>Computer Science Club</title>
	</head>
	<body>
        <div class="main">
			<?php include $_PATHS['_header.php']; ?>
    		<div id="content-window" class="content-window-account">
                <?php
                    $loginerror = "";

                    if($_SERVER["REQUEST_METHOD"] == "POST") {
                        #require_once $_PATHS['db'] . "config.php";
                        #require_once $_PATHS['db'] . "user.php";
                        include $_PATHS['loginProcess.php'];
                    }

                    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
                        header("Location:" . "loggedin.php");
                    } else {
                        $formPostUrl = $_PATHS['link'] . "accountPage/";
                        $showSignup = true;
                        include $_PATHS['include_root'] . "accountPage/_login.php";
                    }
                 ?>
			</div>
			<?php include $_PATHS['_footer.php']; ?>
		</div>
    </body>
</html>
