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
				<?php
					if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true && isset($_SESSION['role']) && $_SESSION['role'] >= 2) {
				?>
				<div>
					<button id="btn">Create Event</button>
				</div>
				<div class="modal" id="eventForm">
					<div class="modal-content">
		    			<span class="close">&times;</span>
							<div>Title</div>
							<div><input type="text" name="title" id="title"/></div>
							<div>Date</div>
							<div><input type="datetime-local" name="date" id="date"/></div>
							<div>Location</div>
							<div><input type="text" name="location" id="location"/></div>
							<div>Description</div>
							<div><textarea name="description" id="description"></textarea></div>
							<div><button id="eventSubmit">Submit</button></div>
							<div id="response"></div>
							<input type="hidden" id="createdby" name="createdby" value="<?=$_SESSION['id']?>">
		  			</div>
				</div>
			    <?php } ?>
				<div id="content-window" class="content-window-events"></div>
			<?php include $_PATHS['_footer.php']; ?>
		</div>
    </body>
</html>
