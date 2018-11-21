<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<?php require_once "../config.php";
		      require_once $_PATHS['_meta.php']; ?>
		<link rel="stylesheet" href="<?=$_PATHS['events.css']?>">
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
    			<form>
					<div>Title</div>
					<div><input type="text" name="title" id="title"/></div>
					<div>Date</div>
					<div><input type="text" name="date" id="date"/></div>
					<div>Location</div>
					<div><input type="text" name="location" id="location"/></div>
					<div>Description</div>
					<div><textarea name="description" id="description"></textarea></div>
				</form>
  			</div>
		</div>
    </body>
</html>
