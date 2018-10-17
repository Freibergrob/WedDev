<?php
function getInclude($nav) {
    switch($nav) {
        case "home":
            return "home.php";
        case "about":
            return "../aboutUsPage/_aboutUs.php";
        case "events":
            return "events.php";
        case "account":
            return "account.php";
    }
}
?>
