<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<?php require_once "../config.php";
		      require_once $_PATHS['_meta.php']; ?>
		<link rel="stylesheet" href="<?=$_PATHS['aboutUsPage.css']?>">
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
                </div>
			</div>
			<?php include $_PATHS['_footer.php']; ?>
		</div>
    </body>
</html>
