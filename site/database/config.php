<?php
    //CONNECTION INFO FOR DREW CZOSEK'S SQL SERVER (really secure password)
    //REPLACE THIS INFORMATION IF YOU WANT TO USE YOUR OWN!
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'czosea72');
    define('DB_PASSWORD', 'dbPass');
    define('DB_NAME', 'czosea72');

    $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    if($link === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
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