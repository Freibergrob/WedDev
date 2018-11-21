<?php 
session_start(); 


$_SESSION["loggedin"] = false;
$_SESSION["id"] = "";
$_SESSION["username"] = "";
$_SESSION["role"] = "";

header("Location: " . "index.php") ;



?>