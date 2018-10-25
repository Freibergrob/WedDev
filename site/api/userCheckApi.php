<?php
    include "../database/user.php";
    $user = array();
    $user = getUser($_POST["user"], $link);

    if (isset($user["user"])) {
        echo json_encode("found");
    } else {
        echo json_encode("not found");
    }
 ?>
