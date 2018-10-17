<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="author" content="The Group">
		<meta name="description" content="CS Club">
		<meta name="keywords" content="IT,Resume,Programming">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/index.css">
		<title>Computer Science Club</title>
	</head>
	<body>
        <?php
        include "../php/nav.php";

        if (!isset($_GET["nav"])) {
            $N = getInclude("home");
        } else {
            $N = getInclude($_GET["nav"]);
        }

        ?>
        <p class="first">
            UW-Oshkosh Computer <br>
             Science Club
        </p>
        <p class="second">
            <a href="index.php?nav=home"><input name="Home" type="submit" value="Home"></a>
            <a href="index.php?nav=about"><input name="about" type="submit" value="About Us"></a>
            <a href="index.php?nav=events"><input name="Events" type="submit" value="Events"></a>
            <a href="index.php?nav=account"><input name="Account" type="submit" value="Account"></a>
        </p>
        <div>
            <?php include $N ?>
        </div>
        <!-- bottom stuff -->
    </body>
</html>
