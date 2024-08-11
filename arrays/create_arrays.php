<?php
// Arrays can be created using array()

$year = array(2001, 2002, 2003, 2004, 2005, 2006, 2007);

// Arrays can also be created using []
$profession = ["Software Engineer", "Web Designer and Consultant", "Online Publisher"];

// You can declare an empty array, and add items to it later

$cars = [];
$cars[0] = "Toyota Camry";
$cars[1] = "Lexus Jeep";
$cars[2] = "Honda";

// Named keys
$user_profile = [];
$user_profile["name"] = "Tunde Sanusi";
$user_profile["job"] = "Frontend Engineer";
$user_profile["year"] = 2024;

// Mixed keys
$education = [];
$education[0] = "Federal University of Technology, Akure";
$education["faculty"] = "School of Physical Sciences";
$education["department"] = "Industrial Mathematics";
var_dump($education);



?>