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

$sql = "SELECT id, firstname, lastname, email FROM MyGuests WHERE lastname='Sanusi'";
$result = $conn->query($sql);

if ($result -> num_rows > 0){
    while ($row = $result -> fetch_assoc()){
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. " | Email - " . $row["email"]. "<br/>" ;
    }
} else {
    echo "No results found!";
}

$conn ->close();



?>