<?php
    require_once "../database/user.php";
    //SANITIZE INPUTS
    $return = getUser($_POST["u"], $link);
    
    if (isset($return["error"])) {
        echo json_encode($return["error"]);
    } else if (isset($return["user"])) {
        echo json_encode($return["user"]);
    } else {
        insertUser($_POST["u"], crypt($_POST["p"]), $link);
        echo json_encode("Created");
    }
?>
