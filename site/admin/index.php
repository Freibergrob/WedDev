<?php
    require_once "../config.php";
    session_start();
    $loginerror = "";
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        include "../php/loginProcess.php";
    }

    if(isset($_SESSION["loggedin"]) && isset($_SESSION["role"]) && $_SESSION["loggedin"] === true && $_SESSION["role"] == 3) {
        header("Location: " . "admin.php");
        die();
    } 
    else if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        header("Location: " . $_PATHS["link"]) ;
    }
    else if($_SERVER["REQUEST_METHOD"] == "POST") {
        $loginerror = "Access Denied!";
    }
        $formPostUrl = "index.php";
        $showSignup = false;
        include "../accountPage/_login.php";
 ?>
