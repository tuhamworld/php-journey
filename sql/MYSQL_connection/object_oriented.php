<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// Nota-bene

// $connect_error was broken until PHP 5.2.9 and 5.3.0. To ensure compatibility with PHP versions prior to 5.2.9 and 5.3.0, its advisable to use the following code instead:

// Check connection
if (mysqli_connect_error()) {
  die("Database connection failed: " . mysqli_connect_error());
}
echo "<p>Connection successful!</p>";


// Closing connection
$conn->close();

?>