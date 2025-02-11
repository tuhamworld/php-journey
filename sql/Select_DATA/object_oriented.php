<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";


// Creating connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn -> connect_error){
    die ("Connection failed: " . $conn-> connect_error);
}


// The SELECT statement is used to select data from one or more tables
// Alternatively, we can use the * character to select ALL columns from a table

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn -> query($sql);


// if ($result -> num_rows > 0){
//     // outputting data of each row
//     while ($row = $result -> fetch_assoc()){
//         echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br/>";
//     }
// } else {
//     echo "No results found!";
// }



// Putting results in a Table
if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]." ".$row["lastname"]."</td></tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }
$conn->close();



?>