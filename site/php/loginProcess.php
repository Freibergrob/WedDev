<?php
$user = array();
$user = getUser($_POST["username"], $link);

if(isset($user["Error"])) {
    ?>
        <p>An Error Occured!<p>
    <?php
} else if(!isset($user["user"]) || !isset($user["password"]) || !isset($user["role"]) || $user["password"] == crypt($_POST["password"], $user["password"])) {
    ?>
        <p>Authentication Failure!
    <?php
} else  {
    $_SESSION["loggedin"] = true;
    $_SESSION["id"] = $user["id"];
    $_SESSION["username"] = $user["user"];
    $_SESSION["role"] = $user["role"];
}
?>
