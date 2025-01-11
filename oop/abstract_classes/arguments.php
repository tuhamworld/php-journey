<?php

abstract class ParentClass {
    abstract protected function prefixName($name);
}

class ChildClass extends ParentClass{
    public function prefixName($name){
        if ($name == "Tuham"){
            $prefix = "Engr.";
        } elseif ($name == "Toylak"){
            $prefix = "Dr.";   
        } else {
            $prefix = "";
        }

        return "$prefix $name";
    }
}

$class = new ChildClass;
echo $class-> prefixName("Tuham");
echo "<br/>";
echo $class -> prefixName("Toylak");
echo "<br/>";
echo $class-> prefixName("H.O.G Cakes");

?>