<?php
    require_once('db_credentials.php');

    function db_connect() {
        try {
            $db = new PDO("mysql:dbname=" . DB_NAME . ";host=" . DB_SERVER, DB_USER, DB_PWD);
            return $db;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
 ?>
