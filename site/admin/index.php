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
<?php
    session_start();
    $loginerror = "";
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        include "../php/loginProcess.php";
    }

    if(isset($_SESSION["loggedin"]) && isset($_SESSION["role"]) && $_SESSION["loggedin"] === true && $_SESSION["role"] == 3) {
        header("Location: " . "admin.php");
        die();
    }
    else if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        header("Location: " . $_PATHS["link"]) ;
    }
    else if($_SERVER["REQUEST_METHOD"] == "POST") {
        $loginerror = "Access Denied!";
    }
        $formPostUrl = "index.php";
        $showSignup = false;
      //  include "../accountPage/_login.php";
        
 ?>

<!DOCTYPE html>
<html>
  <head>
        <meta charset="UTF-8">
        <?php require_once "../config.php";
        require_once $_PATHS['_meta.php']; ?>
		<link rel="stylesheet" href="<?=$_PATHS['adminHome.css']?>">
		<title>Computer Science Club</title> 
  </head>
    <body>
        <form action=<?=$formPostUrl ?> method="post">
            <div class="wrapper">
                <h2>Admin Login</h2>
                <p class="error"><strong><?=$loginerror ?></strong></p>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <div class="button">
                
                    <input type="submit" class="btn btn-primary" value="Login">
                </div>
                <?php
                    if($showSignup){
                ?>
                <?php
                }?>
            </div>
        </form>
        <?php include $_PATHS['_footer.php']; ?>
    </body>
</html>
