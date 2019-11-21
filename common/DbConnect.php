<?php
Class DbConnect{
    function getdbconnect(){
        $servername = "";
        $username = "";
        $password = "";
        $whitelist = array(
            '127.0.0.1',
            '::1'
        );
        
        if(in_array($_SERVER['REMOTE_ADDR'], $whitelist)){
            $servername = "localhost";
        $username = "root";
        $password = "root";
        }else{
         $servername = "bqmayq5x95g1sgr9.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
         $username = "a07zwrfbrck7q903";
         $password = "a6bfe3tehmmgm6xr";
        }
        
        $mysql = new PDO("mysql:host=$servername;dbname=first_db", $username, $password);
        // set the PDO error mode to exception
        $mysql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $mysql;
    }
}
?>