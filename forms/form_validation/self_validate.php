<?php

$nameErr = $emailErr = $websiteErr = $genderErr = "";
$name = $email = $website = $gender = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (empty($_POST["name"])){
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
    }

    if (empty($_POST["email"])){
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
    }

    if (empty($_POST["website"])){
        $websiteErr = "";
    } else {
        $website = test_input($_POST["website"]);
    }

    if (empty($_POST["comment"])){
        $comment = "";
    } else {
        $comment = test_input($_POST["comment"]);
    }

    if (empty($_POST["gender"])){
        $genderErr = "Gender is required";
    } else {
        $gender = test_input($_POST["gender"]);
    }


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


?>