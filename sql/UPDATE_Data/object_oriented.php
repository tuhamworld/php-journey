<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname );

// Check connection

if ($conn -> connect_error){
    die("Connectio failed: " . $conn->connect_error);
}

$sql = "UPDATE MyGuests SET email='hogcakes@example.com' WHERE id=3";

if ($conn->query($sql) === TRUE){
    echo "MyGuests Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();


?>