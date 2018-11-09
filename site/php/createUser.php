<?php
    require_once($_PATHS['initialize.php']);
    $User = $_POST["username"];
    $Password = $_POST["password"];

    insertUser($User, crypt($Password), $link);

?>

<p>Account Created!  Click <a href="index.php?nav=account">Here</a> to Login now!
