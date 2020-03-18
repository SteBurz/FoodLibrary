<?php

require $_SERVER['DOCUMENT_ROOT'].'/FoodLibrary/config/db.config.php';

class Manager {
    function connect() {
        $serverName = DBHOST;
        $username   = DBUSER;
        $password   = DBPWD;
        $dbName     = DBNAME;

        // Create connection
        $conn = new mysqli($serverName, $username, $password, $dbName);
        // Check connection
        if ($conn->connect_error) {
            die('Connection failed: ' . $conn->connect_error);
        }

        return $conn;
    }
}
?>