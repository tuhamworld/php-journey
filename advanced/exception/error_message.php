<?php

function divide($dividend, $divisor){
    if ($divisor === 0){
        throw new Exception("Division by zero not possible");
    }
    return $dividend/$divisor;
}

try{
    echo divide(35, 0);
} catch(Exception $ex){
    $code = $ex -> getCode();
    $message = $ex -> getMessage();
    $file = $ex -> getFile();
    $line = $ex -> getLine();
    echo "Exception thrown in $file on line $line: [Code $code] <br/>";
    echo "$message";
}




?>