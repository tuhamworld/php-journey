<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error){
    die("Connection failed: " . $conn ->connect_error);
}

// Sorting records in ascending or descending (by default it is in ascending)
//  To sort in descendingm use the "DESC" keyword at the end of column_name


$sql = "SELECT id, firstname, lastname FROM MyGuests ORDER BY lastname";
$result = $conn->query($sql);

if ($result ->num_rows > 0){
    // Outtputting data of each row
    while ($row = $result->fetch_assoc()){
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br/>";
    }
} else {
    echo "No results found!";
}

$conn->close();


?>