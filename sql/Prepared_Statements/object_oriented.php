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


// Preparing and binding statements

$stpb = $conn -> prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
$stpb -> bind_param("sss", $firstname, $lastname, $email); // stpb is my acronymn for statement prepared bind || The sss argument implies strings (see details at the end)

// Set parameters and execute
$firstname = "Adio";
$lastname = "Fuad";
$email = "proffuad@example.com";
$stpb -> execute();


$firstname = "Tunde";
$lastname = "Sanusi";
$email = "tuham@example.com";
$stpb -> execute();

$firstname = "H.O.G";
$lastname = "Cakes";
$email = "hogcakes@example.com";
$stpb -> execute();

echo "New records created successfully";

$stpb->close();
$conn -> close();

// The argument may be of four types
// i - integer
// d - double
// s - string
// b - BLOB


// Telling mysql what type of data to expect helps in minimizing risk of SQL injections

?>