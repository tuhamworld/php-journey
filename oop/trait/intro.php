<?php
// PHP only allow one single inheritance. That is; a child class can inherits behaviors from one single Parent class

// If a class needs to inherit multiple behaviors, then "OOP trait" would solve the problem.


trait TraitName {
    // some code
}

class MyClass {
    use TraitName;
}

?>