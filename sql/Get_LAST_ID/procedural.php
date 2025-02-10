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
('Yam', 'Carbohydrate'),
('Groundnut Oil', 'Fats and Oil');
";

if (mysqli_query($conn, $sql)){
    $last_id = mysqli_insert_id($conn);
    echo "New MyFood record created successfully. The last inserted ID is: " . $last_id;
} else {
    echo "Error : " . $sql . "<br/>" . mysqli_error($conn);
}

mysqli_close($conn);




?>