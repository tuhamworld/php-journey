<?php
$xmlDoc = new DOMDocument();
$xmlDoc -> load("note.xml");

print $xmlDoc ->saveXML();
echo "<hr/>";

// Looping through XML

$x = $xmlDoc ->documentElement;
foreach ($x->childNodes AS $item){
    print $item->nodeName . " = " . $item->nodeValue . "<br/>";
}

?>