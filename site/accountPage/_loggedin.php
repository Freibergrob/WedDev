<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<?php require_once "../config.php";
			  require_once $_PATHS['_meta.php']; ?>
        <link rel="stylesheet" href="<?=$_PATHS['common.css']?>">   
		<link rel="stylesheet" href="<?=$_PATHS['loggedin.css']?>">
		<title>Computer Science Club</title>
	</head>
	<body>
<?php 
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        updateProfile($_SESSION['id'], $_POST['first'], 
                      $_POST['last'], $_POST['nick'], 
                      $_POST['year'], $_POST['season'],
                      $_POST['email'], $_POST['aboutself']);
    }
?>
<div class="main">
<?php include $_PATHS['_header.php'];?>
<p class = "loggedin"><?= 'You are logged in!';?></p>
<p>
<form action="_loggedin.php" method="POST">
    <label for="first">First Name</label>
    <input type="input" id="first" name="first" class="first" placeholder="First Name">
    <label for="last">Last Name</label>
    <input type="input" id="last" name="last" class="last" placeholder="Last Name">
    <label for="nick">Nickname</label>
    <input type="input" id="nick" name="nick" class="nick" placeholder="Nickname">
    <label for="year">Graduation Year</label>
    <select id="year" name="gradyear">
        <option value="2018">2018</option>
        <option value="2019">2019</option>
        <option value="2020">2020</option>
        <option value="2021">2021</option>
        <option value="2022">2022</option>
        <option value="2023">2023</option>
        <option value="2024">2024</option>
        <option value="2025">2025</option>
        <option value="2026">2026</option>
    </select>
    <label for="fall">Fall</label>
    <input type="radio" id="fall" name="season" value="fall">
    <label for="spring">Spring</label>
    <input type="radio" id="spring" name="season" value="spring">
    <label for="email">Email</label>
    <input type="input" id="email" name="email" placeholder="Email">
    <label for="bio">Biography</label>
    <textarea rows="4" cols="63" name="aboutself" placeholder="Tell us about yourself..."></textarea><br>
    <input type="submit" value="submit">
</form>
</p>
<?php include $_PATHS['_footer.php']; ?>
</div>
</body>
</html>
