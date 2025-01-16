<?php
// A database consists of one or more tables

// The CREATE DATABASE is used to create a database

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn -> connect_error){
    die ("Connection failed: " . $conn -> connect_error);
}

// Creating database
$sql = "CREATE DATABASE myDB";
if ($conn -> query($sql) === TRUE){
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn -> error;
}


$conn -> close();

// Tip: If one have to use a specific port, add an empty string for the database-name argument, like this: new mysqli("localhost", "username", "password", "", port)

?>