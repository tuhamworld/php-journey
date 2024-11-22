<?php

// The throw statement allows a user defined function or method to throw an exception. When an exception is thrown, the code following it will not be executed.

// If an exception is not caught, a fatal error will occur with an "Uncaught Exception" message.




function divide($dividend, $divisor){
    if ($divisor === 0){
        throw new Exception("Division by zero");
    }
    return $dividend/$divisor;
}

echo divide(45,0);

?>