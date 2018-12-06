<?php
    function insertProfile($id){
        $db = db_connect();
        $id = $db->quote($id);
        $sql = "INSERT INTO profile (userId) VALUES ($id)";

        $db->exec($sql);
    }
   function updateProfile($id, $first, $last, $nick, $year, $season, $email, $aboutself){
        $db = db_connect();
        $id = $db->quote($id);
        $first = $db->quote($first);
        $last = $db->quote($last);
        $nick = $db->quote($nick);
        $year = $db->quote($year);
        $season = $db->quote($season);
        $email = $db->quote($email);
        $aboutself = $db->quote($aboutself);

        $sql = "UPDATE profile SET firstName = $first, lastName = $last, 
                nickname = $nick, gradYear = $year, gradSeason = $season,
                email = $email, bio = $aboutself WHERE userid = $id";
                
        $db->exec($sql);
   }
   function getProfile($id){
        $db = db_connect();
        $id = $db->quote($id);
        try {
            $rows = $db->query("SELECT * FROM profile WHERE userId = $id");
            return $rows;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            db_disconnect();
            die();
        }
   }
 ?>
