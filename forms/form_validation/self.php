<?php


// Define variables

$name = $website = $email = $gender = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $website = test_input($_POST["website"]);
    $email = test_input($_POST["email"]);
    $gender = test_input($_POST["gender"]);
    $comment = test_input($_POST["comment"]);
}

function test_input($data)
{
    // Trim whitespace from data
    $data = trim($data);
    // Remove backslashes from data
    $data = stripslashes($data);
    // Convert special characters to html entities
    $data = htmlspecialchars($data);
    return $data;
}



// Outputting Result

echo "<h2>Your Input Result</h2> <br>";

echo $name;
echo "<br/>";
echo $email;
echo "<br/>";
echo $website;
echo "<br/>";
echo $gender;
echo "<br/>";
echo $comment;
echo "<br/>";
