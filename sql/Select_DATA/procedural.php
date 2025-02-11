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

$sql = "SELECT id, name, classes FROM  MyFoods";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0){
    // Outputting data of each row
    while ($row = mysqli_fetch_assoc($result)){
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " | Class of Food - " . $row["classes"]. "<br/>";
    }
} else {
    echo "No results found!";
}


mysqli_close($conn);


?>