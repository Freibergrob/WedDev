<?php
    require_once "../config.php";
    require_once $_PATHS['initialize.php'];

    $users = getUser($_POST["username"]);
    $usersArray = $users->fetchAll();
    #var_dump($user);

    if($users->rowCount()>0){
      #$loginerror = "Authenication Failure!";
      echo json_encode("found");
    } else {
        echo json_encode("not found");
     }
 ?>
