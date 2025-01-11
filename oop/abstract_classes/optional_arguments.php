<?php

abstract class ParentClass {
    abstract protected function prefixName($name);
}

class ChildClass extends ParentClass{
    // The child may define optional arguments that are not in the parent's 
    public function prefixName($name, $seperator = ".", $greeting = "Dear"){
        if ($name == "Tuham"){
            $prefix = "Engr";
        } elseif ($name == "Toylak"){
            $prefix = "Dr";
        } else {
            $prefix = "";
            $seperator = "";
        }

        return "{$greeting} {$prefix} {$seperator} {$name}";
    }
}

$class = new ChildClass;
echo $class->prefixName("Tuham");
echo "<br/>";
echo $class->prefixName("H.O.G Cakes");
echo "<br/>";
echo $class->prefixName("Toylak");



?>