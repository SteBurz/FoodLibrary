<?php

require $_SERVER['DOCUMENT_ROOT'].'/FoodLibrary/config/db.config.php';

class Manager {
    function connect() {
        $servername = DBHOST;
        $username   = DBUSER;
        $password   = DBPWD;
        $dbname     = DBNAME;

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die('Connection failed: ' . $conn->connect_error);
        }

        return $conn;
    }
}
?>