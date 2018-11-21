<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<?php require_once "config.php"?>
		<meta name="author" content="The Group">
		<meta name="description" content="CS Club">
		<meta name="keywords" content="IT,Social,Programming">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name=“robots” content=“noindex, nofollow” />
        <link rel="stylesheet" href="<?=$_PATHS['common.css']?>">
		<link rel="stylesheet" href="<?=$_PATHS['home.css']?>">
		<link rel="shortcut icon" href="<?=$_PATHS['image']?>favicon.png" type="image/x-icon"/>
		<link href="<?=$_PATHS['font-varela']?>" rel="stylesheet">
		<script src="<?=$_PATHS['jquery']?>"></script>
		<title>Computer Science Club</title>
	</head>
	<body>
		<div class="main">
			<?php include $_PATHS['_header.php'];
			 require_once $_PATHS['initialize.php'];
			 $events = getNextEvent();?>
    		<div id="content-window" class="content-window-home">
					<h3>Next upcoming event</h3>
						<p><?php
						foreach($events as $event){
							date_default_timezone_set('America/Chicago');
							$time = strtotime($event['eDate']);
							$formatForView = date("m/d/y g:i A", $time);?>
							<?=$event['title']?><br>
							Time: <?=$formatForView?><br>
							Location: <?=$event['location']?>
							<?php
						}
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
			</div>
			<?php include $_PATHS['_footer.php']; ?>
		</div>
    </body>
</html>
