<?php

// Encoding an associative array into json

$last_name = array("Fuad" => "Adio", "Tunde" => "Sanusi", "Buliameen" => "Adeyemo", "Yusuf" => "Olapade");

echo json_encode($last_name);

// Encoding an indexed array into json

$city = array("Ibadan", "Abeokuta", "Akure", "Benin city", "Ogbomoso", "Lagos", "Ede", "Ife");

echo json_encode($city);


?>