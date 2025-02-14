<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql to delete a record
    $sql = "DELETE FROM MyLanguage WHERE framework='Yoruba'";

    // using exec() because of no results being returned
    $conn->exec($sql);
    echo "Record deleted successfully";
} catch (PDOException $e){
    echo $sql . "<br/>" . $e->getMessage();
}

$conn = null;


?>