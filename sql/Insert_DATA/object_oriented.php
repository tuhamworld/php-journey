<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";


// Creating connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn -> connect_error){
    die ("Connection failed: " . $conn-> connect_error);
}

// sql to add record into Table
// INSERT INTO table_name (column1, column2, column3,...)
// VALUES (value1, value2, value3,...)


$sql = "INSERT INTO MyGuests(firstname, lastname, email)
VALUES ('Tunde', 'Sanusi', 'hello@tuhamworld.com')

";


if ($conn ->query($sql) === TRUE){
    echo "New record created successfully";
} else {
    echo "Error: " . $conn->error;
}

$conn-> close();


?>