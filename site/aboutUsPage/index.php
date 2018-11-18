<!DOCTYPE html>
<html lang="en">
	<head>
        <?php require_once "../config.php" ?>
		<meta charset="UTF-8">
		<meta name="author" content="The Group">
		<meta name="description" content="CS Club">
		<meta name="keywords" content="IT,Social,Programming">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name=“robots” content=“noindex, nofollow” />
		<link rel="shortcut icon" href="<?=$_PATHS['image']?>favicon.png" type="image/x-icon"/>
		<link rel="stylesheet" href="<?=$_PATHS['common.css']?>">
		<link rel="stylesheet" href="<?=$_PATHS['aboutUsPage.css']?>">
		<link href="<?=$_PATHS['font-varela']?>" rel="stylesheet">
		<title>Computer Science Club</title>
	</head>
	<body>
        <div class="main">
			<?php
				include $_PATHS['_header.php'];
				require_once $_PATHS['initialize.php'];
				$pageContent = getPageContent("aboutUsPage");
			?>

    		<div id="content-window" class="content-window-about">
                <div class = "aboutUs">
					<?php
						foreach ($pageContent as $section) {
					?>
							<?=$section['data'] ?>
					<?php
						}
					?>
                  <h2>Links</h2>
                        <div class = "links">
                          <a href = "https://discord.gg/VxBYHqR" target = "_blank">
                                <img class = "image" src="<?=$_PATHS['image']?>discordIcon.png" alt="Discord icon" title = "Discord" width ="125">
                          </a>
                          <span><p class = "discripton">Discord</p></span>
                        </div>
                        <div class = "links">
                          <a href = "https://github.com/UWO-CS-Club" target = "_blank">
                                <img class = "image" src="<?=$_PATHS['image']?>gitIcon.png" alt="GitHub icon" title = "GitHub" width ="125">
                          </a>
                          <span><p class = "discripton">GitHub</p></span>
                        </div>
                        <div class = "links">
                        <a href = "https://www.uwosh.edu/computer_science/" target = "_blank">
                                <img class = "image" src="<?=$_PATHS['image']?>oshkoshIcon.jpg" alt="UWO icon" title = "UWO" width ="125">
                        </a>
                        <span><p class = "discripton">Computer Science</p></span>
                        </div>
                </div>
			</div>
			<?php include $_PATHS['_footer.php']; ?>
		</div>
    </body>
</html>
