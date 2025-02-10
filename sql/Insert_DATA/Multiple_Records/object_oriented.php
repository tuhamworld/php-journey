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
VALUES ('Adeyemo', 'Buliameen', 'sirdfootwear@example.com');";

$sql .= "INSERT INTO MyGuests(firstname, lastname, email)
VALUES ('Akinrinade', 'Abdulazeez', 'calculus@example.com');
";


if ($conn ->multi_query($sql) === TRUE){ // multiquery (N.B)
    echo "New records created successfully.";
} else {
    echo "Error: " . $sql . "<br/>" . $conn->error;
}

$conn-> close();


?>