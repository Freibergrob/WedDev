<?php
    date_default_timezone_set('Africa/Lagos');
    include "../php/calendar.php";

    if (isset($_POST["m"]) && isset($_POST["y"])) {
        $month = $_POST["m"];
        $year = $_POST["y"];
        echo json_encode(build_calendar($month, $year));
    } else {
        echo json_encode("error");
    }
    exit;
?>
