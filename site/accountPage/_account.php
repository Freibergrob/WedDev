<?php
    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        /*
            The login process:
            sanitize and validate inputs
            get user from database
            compare Password
            set session values
        */
        $_SESSION["loggedin"] = true;
        $_SESSION["id"] = "you";
        $_SESSION["username"] = "username";
        $_SESSION["role"] = 3;
    }

    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
        include "accountPage/_loggedin.php";
    } else {
        $formPostUrl = "index.php?nav=account";
        include "accountPage/_login.php";
    }
 ?>
