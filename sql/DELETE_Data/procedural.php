<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection

if (!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record 
$sql = "DELETE FROM MyFoods WHERE classes='Carbohydrate'";

if (mysqli_query($conn, $sql)){
    echo "Carbohydrate Classes Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);


?>