<?php
Class DbConnect{
    function getdbconnect(){
        $servername = "";
        $username = "";
        $password = "";
        $database = "";
        $whitelist = array(
            '127.0.0.1',
            '::1'
        );
        
        if(in_array($_SERVER['REMOTE_ADDR'], $whitelist)){
            $servername = "localhost";
        $username = "root";
        $password = "root";
        $database = "first_db";
        }else{
         $servername = "bqmayq5x95g1sgr9.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
         $username = "a07zwrfbrck7q903";
         $password = "a6bfe3tehmmgm6xr";
         $database = "v49paqksf2uuhzyd";
        }
        
        $mysql = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        // set the PDO error mode to exception
        $mysql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $mysql;
    }
}
?>