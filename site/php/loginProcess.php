<?php
$user = array();
$user = getUser($_POST["username"], $link);

if(isset($user["Error"])) {
    //Error Occured, Do Not Login
} else if(!isset($user["user"]) || !isset($user["password"]) || !isset($user["role"])) {
    //No User Found, Do Not Login
} else if($user["password"] == crypt($_POST["password"], $user["password"])) {
    $_SESSION["loggedin"] = true;
    $_SESSION["id"] = $user["id"];
    $_SESSION["username"] = $user["user"];
    $_SESSION["role"] = $user["role"];
} else {
    //Password Mismatch, Do Not Login
}
?>
