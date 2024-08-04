<?php declare(strict_types=1);
//  PHP 7 also supports Return Type declaration

function addFloats(float $a, float $b) : float{
    return $a + $b;
}

echo addFloats(2.3, 5.5);

?>