<?php

$servername = "localhost";
$username = "root";
$password = "";
$port = "3307"; // For using MariaDB 


try {
    $conn = new PDO("mysql:host=$servername", $username, $password); // add port=$port for MariaDB
    // set the PDO error mode to exception
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE myDBPDO";
    // using exec() because no results are returned
    $conn -> exec($sql);
    echo "Database created successfully <br/>"; 
} catch (PDOException $e){
    echo $sql . "<br/>" . $e->getMessage();
}

$conn = null;

?>