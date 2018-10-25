<?php
$user = array();
$user = getUser($_POST["username"], $link);

if(isset($user["Error"])) {
    $loginerror = "Authenication Failure!";
} else if(!isset($user["user"]) || !isset($user["password"]) || !isset($user["role"]) || $user["password"] == crypt($_POST["password"], $user["password"])) {
    $loginerror = "Authenication Failure!";
} else  {
    $_SESSION["loggedin"] = true;
    $_SESSION["id"] = $user["id"];
    $_SESSION["username"] = $user["user"];
    $_SESSION["role"] = $user["role"];
}
?>
