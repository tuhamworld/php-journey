<?php

function divide($dividend, $divisor){
    if ($divisor === 0){
        throw new Exception("Division by zero");
    }
    return $dividend/$divisor;
}


try{
    echo divide(5, 0);
} catch (Exception $e) {
    echo "Unable to divide by 0";

}



// $e contains details about the exception, such as:
// The message: $e->getMessage().
// The code: $e->getCode().
// The file: using $e->getFile().
// The line: $e->getLine().


try {
    echo divide(5, 0);
} catch (Exception $e){
    echo "Unable to divide by 0 " . $e ->getMessage();
}


?>