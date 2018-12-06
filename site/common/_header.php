<?php   
session_start();
?>

<div class="main-top">
    <div class="logo-wrapper">
        <div class="logo-float">
            <a href="<?=$_PATHS['link']?>">
                <img src="<?=$_PATHS['image']?>CSIcon.png" alt="CSIcon" width="125">
            </a>
        </div>
    </div>
    <div class="banner-container">
        <img src="<?=$_PATHS['image']?>bannerc.jpg" alt="Banner">
    </div>
    <div class="first">
        UW-Oshkosh Computer Science Club
    </div>
    <div class="nav">
        <a class="nav-link" href="<?=$_PATHS['link']?>">Home</a>
        <a class="nav-link" href="<?=$_PATHS['link']?>aboutUsPage/">About Us</a>
        <a class="nav-link" href="<?=$_PATHS['link']?>eventsPage/">Events</a>
        <a class="nav-link" href="<?=$_PATHS['link']?>accountPage">Account</a>
    <?php
        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true)
        {
    ?>
        <a class="nav-link" href="<?=$_PATHS['link']?>accountPage/_logout.php">Log out</a>
    <?php
        }
    ?>
    </div>
</div>
