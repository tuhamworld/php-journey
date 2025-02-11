<?php
// Selecting Data with PDO using Prepared Statements

echo "<table style='border: solid 1px blue;'>";
echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th></tr>";

class TableRows extends RecursiveIteratorIterator {
    function __construct($it){
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current(): mixed{
        return "<td style='width:150px;border:1px solid blue;'>" . parent::current(). "</td>";
    }

    function beginChildren(): void{
        echo "<tr>";
    }

    function endChildren(): void{
        echo "</tr>" . "\n";
    }
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn ->prepare("SELECT id, firstname, lastname FROM MyGuests");
    $stmt ->execute();

    // setting the resulting array to associative

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v){
        echo $v;
    }
} catch (PDOException $e){
    echo "Error: " . $e -> getMessage();
}

$conn = null;
echo "</table>";



?>