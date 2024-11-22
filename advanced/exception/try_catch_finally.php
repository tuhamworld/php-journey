<?php
// This code can also be used to catch exceptions. The major difference is that finally will always run regardless of whether exception is caught or not

function divide($dividend, $divisor){
    if ($divisor === 0){
        throw new Exception("Division by zero not possible");
    }
    return $dividend/$divisor;
}

try {
    echo divide(5, 0);
} catch (Exception $e){
    echo "Unable to divide. ";
} finally {
    echo "Process completed";
}

// Outputting a result even if an exception was not caught

try {
    echo divide(20, 0);
} finally {
    echo "Process has been completed.";
}

?>