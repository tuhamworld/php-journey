<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";


// Creating connection

$conn = mysqli_connect ($servername, $username, $password, $dbname);

// Check connection

if (!$conn) {
    die ("Connection failed: " . mysqli_connect_error());
}

// sql to create table

$sql = "CREATE Table MyFoods(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
classes VARCHAR(30) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql)){
    echo "Table MyFood created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);




?>