<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // setting PDO error mode to exception
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $conn -> beginTransaction();
    // SQL statements
    $conn -> exec ("INSERT INTO MyLanguage (language, framework)
    VALUES ('CSS', 'Bootstrap')");
    $conn -> exec ("INSERT INTO MyLanguage (language, framework)
    VALUES ('Nigeria', 'English')");
    $conn -> exec ("INSERT INTO MyLanguage (language, framework)
    VALUES ('Ibadan', 'Yoruba')");

    // committing transaction
    $conn -> commit();
    echo "New MyLanguage records created successfully";

} catch (PDOException $e){
    // rolling back transaction if something failed
    $conn -> rollBack();
    echo $sql . "<br/>" . $e->getMessage();
}

$conn = null;



?>