<?php
    require_once "config.php";

    function getEventsByMonth($dateMin, $dateMax, $link) {
        $month = $link->quote($m);
        $year = $link->quote($y);
        $sql = "SELECT id, title, password, eDate, description, createdby FROM events WHERE eDate BETWEEN $dateMin AND $dateMax";
        $query = $link->query($sql);
        return $query;
    }

    function insertEvent($m, $d, $y, $time, $loc, $title, $longDesc, $link) {

    }

    function deleteEvent(/*FIGURE OUT THIS SIGNATURE*/$link) {

    }
?>
