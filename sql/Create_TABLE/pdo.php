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
    $sql = "CREATE TABLE MyLanguage(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    language VARCHAR(45) NOT NULL,
    framework VARCHAR(45) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

    // use exec() because no results are returned
    $conn -> exec($sql);
    echo "Table MyLanguage created successfully";
} catch (PDOException $e){
    echo $sql . "<br/>" . $e->getMessage();
}

$conn = null;



?>