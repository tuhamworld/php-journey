<?php
// Static properties can be called directly without creating an instance of a class

// Static properties are declared with the word static

class MyClass {
    public static $staticName = "TuhamWorld.com";
}

echo MyClass::$staticName;


?>