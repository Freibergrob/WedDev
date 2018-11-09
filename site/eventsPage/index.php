<!DOCTYPE html>
<html lang="en">
	<head>
        <?php include "../config.php" ?>
		<meta charset="UTF-8">
		<meta name="author" content="The Group">
		<meta name="description" content="CS Club">
		<meta name="keywords" content="IT,Social,Programming">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name=“robots” content=“noindex, nofollow” />
		<link rel="shortcut icon" href="<?=$_PATHS['image']?>favicon.png" type="image/x-icon"/>
		<link rel="stylesheet" href="<?=$_PATHS['common.css']?>">
		<link rel="stylesheet" href="<?=$_PATHS['events.css']?>">
		<link href="<?=$_PATHS['font-varela']?>" rel="stylesheet">
		<script src="<?=$_PATHS['jquery']?>"></script>
        <script src="<?=$_PATHS['events.js']?>"></script>
		<title>Computer Science Club</title>
	</head>
	<body>
        <div class="main">
			<?php include $_PATHS['_header.php']; ?>
			<div>
				<button id="btn">ClickMe</button>
			</div>
    		<div id="content-window" class="content-window-events">
			</div>
			<?php include $_PATHS['_footer.php']; ?>
		</div>
		<div class="modal" id="eventForm">
			<div class="modal-content">
    			<span class="close">&times;</span>
    			<p>Some text in the Modal..</p>
  			</div>
		</div>
    </body>
</html>
