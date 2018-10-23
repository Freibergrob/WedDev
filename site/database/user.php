<?php
    require_once "config.php";

    function insertUser($u, $ph, $link) {
        $user = $link->quote($u);
        $pass = $link->quote($ph);

        $sql = "INSERT INTO users (username, password) VALUES ($user,$pass)";

        $link->exec($sql);

        //Error Handle This
    }

    function getUser($u, $link) {
        $result = array();
        $user = $link->quote($u);
        $sql = "SELECT id, username, password, role FROM users WHERE username = $user";
        $query = $link->query($sql);
            foreach($query as $row) {
                $result["id"] = $row["id"];
                $result["user"] = $row["username"];
                $result["role"] = $row["role"];
                $result["password"] = $row["password"];
            }
        return $result;
    }
 ?>
