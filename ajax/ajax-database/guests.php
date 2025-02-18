<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";
$q = intval($_GET["q"]);

$con = mysqli_connect($servername, $username, $password);

if (!$con){
    die("Could not connect: " . mysqli_connect_error($con));
}
mysqli_select_db($con, "mydb");
$sql = "SELECT * FROM MyGuests WHERE id = '".$q."' ";
$result = mysqli_query($con, $sql);

echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Email</th>
</tr>";

while ($row = mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>" . $row['firstname'] . "</td>";
    echo "<td>" . $row['lastname'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "</tr>";

}
echo "</table>";
mysqli_close($con);




?>