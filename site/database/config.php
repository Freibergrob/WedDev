<?php
    //CONNECTION INFO FOR DREW CZOSEK'S SQL SERVER (really secure password)
    //REPLACE THIS INFORMATION IF YOU WANT TO USE YOUR OWN!
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'czosea72');
    define('DB_PASSWORD', 'dbPass');
    define('DB_NAME', 'czosea72');

    $link = new PDO("mysql:dbname=" . DB_NAME . ";host=" . DB_SERVER, DB_USERNAME, DB_PASSWORD);

    if($link === false) {
        echo "connection failure";
    }

    function getConfig() {
    ?>
    <ul>
        <li>Database Server: <?=DB_SERVER ?></li>
        <li>Database Username: <?=DB_USERNAME ?></li>
        <li>Database Name: <?=DB_NAME ?></li>
    </ul>
    <?php
    }
 ?>
