<?php
    require_once "../config.php";
    require_once $_PATHS['initialize.php'];

    insertEvent($_POST['title'], $_POST['date'], $_POST['location'], $_POST['description'], $_POST['createdby']);
    echo json_encode("200");
 ?>
