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


$sql = "INSERT INTO MyGuests(firstname, lastname, email)
VALUES ('Fuad', 'Adio', 'proffuad@example.com')

";


if ($conn ->query($sql) === TRUE){
    $last_id = $conn -> insert_id;
    echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
    echo "Error: " . $sql . "<br/>" . $conn->error;
}

$conn-> close();


?>