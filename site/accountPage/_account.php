<?php
    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once "database/config.php";
        require_once "database/user.php";
        include "php/loginProcess.php";
    }

    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
        include "accountPage/_loggedin.php";
    } else {
        $formPostUrl = "index.php?nav=account";
        $showSignup = true;
        include "accountPage/_login.php";
    }
 ?>
