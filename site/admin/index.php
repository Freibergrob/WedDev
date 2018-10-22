<?php
    session_start();
    require_once "../database/config.php";
    require_once "../database/user.php";
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        include "../php/loginProcess.php";
    }

    if(isset($_SESSION["loggedin"]) && isset($_SESSION["role"]) && $_SESSION["loggedin"] === true && $_SESSION["role"] == 3) {
        include "adminPanel.php";
    } else {
        $formPostUrl = "index.php";
        $showSignup = false;
        include "../accountPage/_login.php";
    }
 ?>
