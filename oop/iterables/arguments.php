<?php

function printIterable (iterable $myIterable){
    foreach($myIterable as $item){
        echo "<p> $item </p>";
    }
}

$array = ["a", "b", "c", "d", "e"];
printIterable($array);
?>