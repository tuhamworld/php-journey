<?php
$q=$_GET["q"];

$xmlDoc = new DOMDocument();
$xmlDoc->load("country_list.xml");

$x=$xmlDoc->getElementsByTagName('NAME');

for ($i=0; $i<=$x->length-1; $i++){
    // Process only element nodes
    if ($x->item($i)->nodeType==1){
        if ($x->item($i)->childNodes->item(0)->nodeValue == $q){
            $y=($x->item($i)->parentNode);
        }
    }
}

$country=($y->childNodes);

for ($i=0;$i<$country->length;$i++){
    // Process only element nodes
    if ($country->item($i)->nodeType==1){
        echo("<strong>" . $country->item($i)->nodeName . ":</strong> ");
        echo ($country->item($i)->childNodes->item(0)->nodeValue);
        echo("<br/>");
    }

}

?>