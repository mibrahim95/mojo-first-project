<?php
Class DbConnect{
    function getdbconnect(){
        $servername = "bqmayq5x95g1sgr9.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
        $username = "a07zwrfbrck7q903";
        $password = "a6bfe3tehmmgm6xr";
        $mysql = new PDO("mysql:host=$servername;dbname=first_db", $username, $password);
        // set the PDO error mode to exception
        $mysql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $mysql;
    }
}
?>