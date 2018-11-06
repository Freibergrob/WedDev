<?php
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'team3');
    define('DB_PASSWORD', 'j457');
    define('DB_NAME', 'team3');

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
