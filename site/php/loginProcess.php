<?php
require_once "../config.php";
require_once $_PATHS['initialize.php'];

$users = getUser($_POST["username"]);
$usersArray = $users->fetchAll();

if($users->rowCount()==0){
  $loginerror = "Authenication Failure!";

} else if($usersArray[0]['password'] != crypt($_POST["password"], $usersArray[0]['password'])) {
    $loginerror = "Authenication Failure!";
 } else  {
    $_SESSION["loggedin"] = true;
    $_SESSION["id"] = $usersArray[0]["id"];
    $_SESSION["username"] = $usersArray[0]["username"];
    $_SESSION["role"] = $usersArray[0]["role"];
}
?>
