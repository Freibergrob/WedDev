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
    function getNextEvent(){
      $db = db_connect();
      try{
        $rows = $db->query("SELECT * FROM events WHERE eDate > NOW() LIMIT 1");
        return $rows;
      }
      catch(PDOException $e){
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
      }
    }
    function insertEvent($title, $date, $location, $description, $createdby) {
        $db = db_connect();
        $titleC = $db->quote($title);
        $dateC = $db->quote($date);
        $locationC = $db->quote($location);
        $descriptionC = $db->quote($description);
        $createdbyC = $db->quote($createdby);

        try{
            $sql = "INSERT INTO events (title, edate, location, description, createdby) VALUES ($titleC, $dateC, $locationC, $descriptionC, $createdbyC)";
            $db->exec($sql);
        } catch (PDOException $e) {

        }
    }
?>
