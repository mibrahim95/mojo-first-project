<?php
$servername = "localhost";
$username = "root";
$password = "root";


    $conn = new PDO("mysql:host=$servername;dbname=first_db", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

global $conn;
?>