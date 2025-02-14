<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection

if (!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE MyFoods SET name='Egg' WHERE id=2";

if (mysqli_query($conn, $sql)){
    echo "MyFoods Record updated successfully";
} else {
    echo "Error updating MyFoods record: " . mysqli_error($conn);
}

mysqli_close($conn);




?>