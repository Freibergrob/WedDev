<?php
function getInclude($nav) {
    switch($nav) {
        case "home":
            return "homePage/_home.php";
        case "about":
            return "aboutUsPage/_aboutUs.php";
        case "events":
            return "eventsPage/_events.php";
        case "account":
            return "accountPage/_account.php";
        case "login":
            return "loginPage/_login.php";
    }
}
?>
