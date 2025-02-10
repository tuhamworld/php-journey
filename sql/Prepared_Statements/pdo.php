<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // setting PDO error mode to exception
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // preparing and binding parameters

    $stpb = $conn -> prepare("INSERT INTO MyFoods (name, classes)
    VALUES (:name, :classes) ");
    $stpb->bindParam(':name', $name);
    $stpb->bindParam(':classes', $classes);

    // insert a row
    $name = "Spaghetti";
    $classes = "Carbohydrate";
    $stpb->execute();
    
    // insert another row
    $name = "Potatoes";
    $classes = "Carbohydrate";
    $stpb->execute();

    echo "New MyFoods records created successfully!";
   
    
} catch (PDOException $e){
    echo "Error: " . $e->getMessage();
}

$conn = null;



?>