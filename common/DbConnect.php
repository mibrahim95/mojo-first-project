<?php
Class DbConnect{
    function getdbconnect(){
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $mysql = new PDO("mysql:host=$servername;dbname=first_db", $username, $password);
        // set the PDO error mode to exception
        $mysql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $mysql;
    }
}
?>