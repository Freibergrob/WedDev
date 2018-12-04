<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<?php require_once "config.php";
			  require_once $_PATHS['_meta.php']; ?>
		<link rel="stylesheet" href="<?=$_PATHS['home.css']?>">
		<title>Computer Science Club</title>
	</head>
	<body>
		<div class="main">
			<?php include $_PATHS['_header.php'];
			 require_once $_PATHS['initialize.php'];
			 $events = getNextEvent();?>
    		<div id="content-window" class="content-window-home">
					<h3>Next upcoming event</h3>
						<p>
						<?php
							
							$event = $events->fetchAll();
							if (count($event) <= 0){?>
								<span>No upcoming events.</span>
							<?php }
							else {
								$evt = $event[0]; 
							date_default_timezone_set('America/Chicago');
							$time = strtotime($evt['eDate']);
							$formatForView = date("m/d/y g:i A", $time);
						?>
							<?=$evt['title']?><br>
							<?=$formatForView?><br>
							<?=$evt['location']?>
							<?php }?>
						</p>
						<?php
							$pageContent = getPageContent("homePage");
							foreach ($pageContent as $section) {
						?>
						<?=$section['data'] ?>
						<?php
							}
						?>
			</div>
			<?php include $_PATHS['_footer.php']; ?>
		</div>
    </body>
</html>