<?php
$usersSQL = "CREATE TABLE users";
$usersSQL .= "(id int(11) NOT NULL AUTO_INCREMENT, username varchar(50) NOT NULL, password varchar(255) NOT NULL, role int(11) NOT NULL DEFAULT 1, PRIMARY KEY (id), UNIQUE KEY username (username), FOREIGN KEY (role) REFERENCES roles(id))";
 ?>
