<?php
    function insertUser($u, $ph) {
        global $db;
        $user = $db->quote($u);
        $pass = $db->quote($ph);

        $sql = "INSERT INTO users (username, password) VALUES ($user,$pass)";

        $db->exec($sql);

        //Error Handle This
    }

    function getUser($u, $link) {
        global $db;
        $user = $db->quote($u);
        try {
            $rows = $db->query("SELECT * FROM users WHERE username = $user");
            return $rows;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            db_disconnect();
            die();
        }
    }
 ?>
