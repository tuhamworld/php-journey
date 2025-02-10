<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // setting PDO error mode to exception
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql to create table
    $sql = "INSERT INTO MyLanguage (language, framework)
    VALUES
    ('CSS', 'Styled Components'), 
    ('System Design', 'Atomic Design'); 
    ";
    // use exec() because no results are returned
    $conn -> exec($sql);
    $last_id = $conn->lastInsertId();
    echo "New MyLanguage created successfully. The last inserted ID for PDO is: " . $last_id;
} catch (PDOException $e){
    echo $sql . "<br/>" . $e->getMessage();
}

$conn = null;



?>