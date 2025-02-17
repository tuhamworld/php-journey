<?php
$file = "books.xml";
$xml = simplexml_load_file($file) or die("Error: Cannot create object");
echo $xml->book[0]['category'] . "<br/>";
echo $xml->book[1]->title['lang'] . "<br/>";


// Looping Attribute values
echo "<hr><p>Looping Attribute values</p> <hr/>";

foreach($xml->children() as $books){
    echo $books->title['lang'];
    echo "<br/>";
}


?>