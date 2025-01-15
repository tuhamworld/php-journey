<?php
$servername = "localhost";
$username = "root";
$password = "";

// Creating connection 
$conn = mysqli_connect($servername, $username, $password);

if (!$conn){
    die ("Connection failed: " . mysqli_connect_error());
}
echo "Connected Successfully!";


// Closing connection
mysqli_close($conn);
?>