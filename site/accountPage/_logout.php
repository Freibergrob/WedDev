<?php 
session_start(); 

$_SESSION["loggedin"] = false;
$_SESSION["id"] = "";
$_SESSION["username"] = "";
$_SESSION["role"] = "";

session_destroy();
?>
<!DOCTYPE html>
<html>
  <head>
  <meta charset="UTF-8">
		<?php require_once "../config.php";
		      require_once $_PATHS['_meta.php']; ?>
		<link rel="stylesheet" href="<?=$_PATHS['forms.css']?>">
		<title>Computer Science Club</title> 
  </head>
  <body>
        <?php include $_PATHS['_header.php']; ?>
                <div class="form-group">
                    <p class = "text-center"><?= 'You have sucessfully logged out!';?></p>
                    <p class = "text-center"><a href="index.php">Click here to Login</a></p>
                </div>
        <?php include $_PATHS['_footer.php']; ?>
  </body>
</html>