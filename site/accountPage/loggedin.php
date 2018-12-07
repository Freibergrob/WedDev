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
<div class="main">
<?php
	$resultMsg = "";
    include $_PATHS['_header.php'];
    if(!isset($_SESSION["loggedin"])) {
        header("Location: " . "index.php");
    }

    if($_SESSION["loggedin"] != true) {
        header("Location: " . "index.php");
    }

    require_once $_PATHS['initialize.php'];
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        updateProfile($_SESSION['id'], $_POST['first'],
                      $_POST['last'], $_POST['nick'],
                      $_POST['year'], $_POST['season'],
                      $_POST['email'], $_POST['aboutself']);
		$resultMsg="Profile Updated!";
    }

    $info = getProfile($_SESSION['id'])->fetchAll();
?>
<p>
<form action="loggedin.php" method="POST">
    <label for="first">First Name</label>
    <input type="input" id="first" name="first" class="first" value="<?=$info[0]['firstName']?>">
    <label for="last">Last Name</label>
    <input type="input" id="last" name="last" class="last" value="<?=$info[0]['lastName']?>">
    <label for="nick">Nickname</label>
    <input type="input" id="nick" name="nick" class="nick" value="<?=$info[0]['nickname']?>">
    <label for="year">Graduation Year</label>
    <select id="year" name="year">
    <?php
        for ($i = 2018; $i < 2031; $i++) {
            if ($i == $info[0]['gradYear']) {
    ?>
        <option value="<?=$i?>" selected='selected'><?=$i?></option>
    <?php
            } else {
    ?>
        <option value="<?=$i?>"><?=$i?></option>
    <?php
            }
    ?>

    <?php
        }
    ?>
    </select><br>
    <?php
        if ($info[0]['gradSeason'] === "fall"){ ?>
            <input type="radio" id="fall" name="season" value="fall" checked="T">
        <?php } else { ?>
            <input type="radio" id="fall" name="season" value="fall">
        <?php } ?>
        <label for="fall">Fall</label><br>
        <?php
        if ($info[0]['gradSeason'] === "spring"){ ?>
            <input type="radio" id="spring" name="season" value="spring" checked="T">
        <?php } else { ?>
            <input type="radio" id="spring" name="season" value="spring">
        <?php } ?>
    <label for="spring">Spring</label><br>
    <label for="email">Email</label>
    <input type="input" id="email" name="email" value="<?=$info[0]['email']?>">
    <label for="bio">Biography</label>
    <textarea rows="4" cols="63" name="aboutself"><?=$info[0]['bio']?></textarea><br>
    <input type="submit" value="submit"><br>
	<p><?=$resultMsg?></p>
</form>
</p>
<?php include $_PATHS['_footer.php']; ?>
</div>
</body>
</html>
