<?php
    require_once($_PATHS['initialize.php']);
    $User = $_POST["username"];
    $Password = $_POST["password"];

    insertUser($User, crypt($Password));
    $result = getUser($User)->fetchAll();
    insertProfile($result[0]["id"]);

?>

<p>Account Created!  Click <a href="index.php?nav=account">Here</a> to Login now!
