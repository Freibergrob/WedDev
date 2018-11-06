<?php
    require_once "config.php";

    function getEventsByMonth($month, $year, $link) {
        $firstDayOfMonth = mktime(0,0,0,$month,1,$year);
        $lastDay = date('t',$firstDayOfMonth);
        $min = $year . "-" . $month . "-1";
        $max = $year . "-" . $month . "-" . $lastDay;

        $sql = "SELECT * FROM events WHERE eDate BETWEEN '$min' AND '$max'";

        $query = $link->query($sql);
        return $query;
    }

    function insertEvent($m, $d, $y, $time, $loc, $title, $longDesc, $link) {

    }

    function deleteEvent(/*FIGURE OUT THIS SIGNATURE*/$link) {

    }
?>
