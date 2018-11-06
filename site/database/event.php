<?php
    require_once "config.php";

    function getEventsByMonth($dateMin, $dateMax, $link) {
        $month = $link->quote($dateMin);
        $year = $link->quote($dateMax);
        $sql = "SELECT * FROM events";
        $query = $link->query($sql);
        return $query;
    }

    function insertEvent($m, $d, $y, $time, $loc, $title, $longDesc, $link) {

    }

    function deleteEvent(/*FIGURE OUT THIS SIGNATURE*/$link) {

    }
?>
