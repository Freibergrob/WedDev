<?php
    function getEventsByMonth($month, $year) {
        $db = db_connect(); //I could not get this to work in the global scope.
        $firstDayOfMonth = mktime(0,0,0,$month,1,$year);
        $lastDay = date('t',$firstDayOfMonth);
        $min = $year . "-" . $month . "-1";
        $max = $year . "-" . $month . "-" . $lastDay;

        try {
            $rows = $db->query("SELECT * FROM events WHERE eDate BETWEEN '$min' AND '$max'");
            return $rows;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
?>
