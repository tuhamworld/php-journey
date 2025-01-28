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

// sql to create record

$sql = "INSERT INTO MyFoods (name, classes)
VALUES 
('Rice', 'Carbohydrate'),
('Beans', 'Protein');
";

if (mysqli_query($conn, $sql)){
    echo "New MyFood record created successfully";
} else {
    echo "Error : " . $sql . "<br/>" . mysqli_error($conn);
}

mysqli_close($conn);




?>