<?php
    function insertProfile($id){
        $db = db_connect();
        $id = $db->quote($id);
        $sql = "INSERT INTO profile (userId) VALUES ($id)";

        $db->exec($sql);
    }
   function updateProfile($first, $last, $nick, $year, $season, $email, $aboutself){
        $db = db_connect();
        $first = $db->quote($first);
        $last = $db->quote($last);
        $nick = $db->quote($nick);
        $year = $db->quote($year);
        $season = $db->quote($season);
        $email = $db->quote($email);
        $aboutself = $db->quote($aboutself);

        $sql = "UPDATE profile SET firstName = $first, lastName = $last, 
                nickname = $nick, gradYear = $year, gradSeason = $season,
                email = $email, bio = $aboutself";
                
        $db->exec($sql);

   }
 ?>
