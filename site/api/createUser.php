<?php
    require_once "../database/user.php";
    //Sanitize and validate the inputs
    $return = getUser($_POST["u"], $link);

    if (isset($return["error"])) {
        //Handle this error in some way
        echo json_encode($return["error"]);
    } else if (isset($return["user"])) {
        //The username is already taken.  Handle this scenario here
        echo json_encode($return["user"]);
    } else {
        //User was created.  Do additional processing
        //Maybe pass them back to the accountPage with a login action attached?
        insertUser($_POST["u"], crypt($_POST["p"]), $link);
        echo json_encode("Created");
    }
?>
