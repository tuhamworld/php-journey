<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection

if (!$conn){
    die ("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, name, classes FROM myfoods ORDER BY classes";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0){
    echo "<table border='1'><tr><th>ID</th><th>Name</th><th>Classes</th></tr>";
    while ($row = mysqli_fetch_assoc($result)){
        echo "<tr><td>" . $row["id"] . "</td> <td> " . $row["name"] . "</td> <td>" . $row["classes"] . "</td></tr>";
    }
} else {
    echo "No results found!";
}

mysqli_close($conn);


?>