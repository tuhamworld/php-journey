<?php
$servername = "localhost";
$username = "root";
$password = "";

// Creating connection 
try {
    $conn = new PDO("mysql:host=$servername;", $username, $password);
    // $conn = new PDO("mysql:host=$servername; dbname=myDB", $username, $password);
    // setting the PDO error to exception
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected Successfully!!";
} catch (PDOException $e){
    echo "Connection failed: " . $e -> getMessage();

}


// Closing connection
$conn = null;

?>