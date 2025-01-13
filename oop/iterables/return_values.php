<?php

function getIterable():iterable{
    return ["a", "b", "c", "d"];

}

$myIterable = getIterable();
foreach ($myIterable as $item ){
    echo "<p>$item</p>";
}

?>