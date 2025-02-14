<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE MyLanguage SET framework='CSS3' WHERE id=5";

    // Prepare statement
    $stmt = $conn ->prepare($sql);

    // execute the query
    $stmt -> execute();

    // echo a message to say the UPDATE succeeded
    echo $stmt->rowCount() . " records UPDATED successfully";

} catch (PDOException $e){
    echo $sql . "<br/>" . $e->getMessage();
}

$conn = null;


?>


