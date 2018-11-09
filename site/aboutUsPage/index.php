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
		<link rel="stylesheet" href="<?=$_PATHS['common.css']?>">
		<link rel="stylesheet" href="<?=$_PATHS['aboutUsPage.css']?>">
		<link href="<?=$_PATHS['font-varela']?>" rel="stylesheet">
		<title>Computer Science Club</title>
	</head>
	<body>
        <div class="main">
			<?php include $_PATHS['_header.php']; ?>
    		<div id="content-window" class="content-window-about">
                <div class = "aboutUs">
                <h2>About</h2>
                  <p class = "aboutUsPar">The Computer Science club at the University of Wisconsin Oshkosh is a student-run
                      organization, which is dedicated to creating and maintaining a tight-knit community of
                      friends and mentors to promote and advocate Computer Science. Within this community,
                      we aim to provide many professional resources for our members including, school-
                      sponsored informational and networking events, social outings, tech workshops, games,
                      collaborative projects, programming competitions, and more. So, come and explore
                      different areas of interest that the field Computer Science has to offer, while creating
                      an atmosphere for networking and making friends.
                    </p>
                  <h2>Officers</h2>
                  <ul class = "listBorder">

                      <li>President: Jake
                          <ul>
                              <li>description</li>
                          </ul>
                      </li>
                      <li>Vice President: Justing Espiritu
                          <ul>
                              <li>description</li>
                          </ul>
                      </li>
                      <li>Treasurer: Robbie Freiberg
                          <ul>
                              <li><p>Hello, I am Robbie and I am the Treasurer of the Computer Science Club.
                                Some of my hobbies in clube playing video games and playing Magic the Gathering.<p></li>
                          </ul>
                      </li>
                      <li>Secretary: Sarah
                          <ul>
                              <li>description</li>
                          </ul>
                      </li>
                      <li>Co-Secretary: Esteban
                          <ul>
                              <li>description</li>
                          </ul>
                      </li>
                      <li>Public Relations: Erik Freiberg
                          <ul>
                            <li><p>I am Erik Freiberg, the Public Relations Officer of the Computer Science Club.
                                   I love spending my free time either watching or playing sports such as, basketball,
                                   baseball and football.</p></li>
                          </ul>
                    </li>
                      <li>OSA Representive: Bryce
                          <ul>
                            <li>description</li>
                          </ul>
                      </li>
                  </ul>
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
