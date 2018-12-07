<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<?php require_once "../config.php";
			  require_once $_PATHS['_meta.php']; ?>
        <link rel="stylesheet" href="<?=$_PATHS['common.css']?>">
		<link rel="stylesheet" href="<?=$_PATHS['forms.css']?>">
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
	<div>
    	<label for="first">First Name</label>
    	<input type="text" id="first" name="first" class="first" value="<?=$info[0]['firstName']?>">
	</div>
	<div>
    	<label for="last">Last Name</label>
    	<input type="text" id="last" name="last" class="last" value="<?=$info[0]['lastName']?>">
	</div>
	<div>
    	<label for="nick">Nickname</label>
    	<input type="text" id="nick" name="nick" class="nick" value="<?=$info[0]['nickname']?>">
	</div>
	<div>
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
    	</select>
	</div>
	<div>
		<label for="fall">Fall</label>
    <?php
        if ($info[0]['gradSeason'] != "spring"){ ?>
            <input type="radio" id="fall" name="season" value="fall" checked="T">
        <?php } else { ?>
            <input type="radio" id="fall" name="season" value="fall">
        <?php } ?>
    </div>
	<div>
		<label for="spring">Spring</label>
        <?php
        if ($info[0]['gradSeason'] === "spring"){ ?>
            <input type="radio" id="spring" name="season" value="spring" checked="T">
        <?php } else { ?>
            <input type="radio" id="spring" name="season" value="spring">
        <?php } ?>
	</div>
	<div>
    	<label for="email">Email</label>
    	<input type="text" id="email" name="email" value="<?=$info[0]['email']?>">
	</div>
	<div>
    	<label for="bio">Biography</label>
    	<textarea rows="4" cols="63" name="aboutself"><?=$info[0]['bio']?></textarea><br>
	</div>
	<div>
    	<input type="submit" value="submit"><br>
		<p><?=$resultMsg?></p>
	</div>
</form>
</p>
<?php include $_PATHS['_footer.php']; ?>
</div>
</body>
</html>
