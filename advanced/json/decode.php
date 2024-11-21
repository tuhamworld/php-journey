<?php
// Decoding an associate array

$names_obj = '{"Fuad":"Adio","Tunde":"Sanusi","Buliameen":"Adeyemo","Yusuf":"Olapade"}'; 

var_dump(json_decode($names_obj));

// The json_decode() returns "object" by default. The json_decode() function has a second parameter, and when set to true, JSON objects are decoded into associative arrays.

var_dump(json_decode($names_obj, true));


// Accessing Decoded PHP Values from returned Object

$obj = json_decode($names_obj);

echo $obj->Fuad;


// Accessing Decoded PHP Values from returned array
$arr = json_decode($names_obj, true);

echo $arr["Tunde"];


// Looping through decoded values from returned object/array

foreach ($obj as $key => $value){
    echo $key . " => " . $value . "<br/>";
}


?>