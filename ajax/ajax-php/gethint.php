<?php
// Array with names
$a[] = "Awwal";
$a[] = "Buliameen";
$a[] = "Calculus";
$a[] = "Dayo";
$a[] = "Walter";
$a[] = "Fasco";
$a[] = "Idris";
$a[] = "H.O.G Cakes";
$a[] = "Proffuad";
$a[] = "Yussuf";


// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""

if ($q !== ""){
    $q = strtolower($q);
    $len = strlen($q);
    foreach($a as $name){
        if (stristr($q, substr($name, 0, $len))){
            if ($hint === ""){
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values

echo $hint === "" ? "no suggestion found" : $hint;

?>