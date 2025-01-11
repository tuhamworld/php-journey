<?php
// Abstract and Interfaces are somewhat similar except that;
// - Interfaces cannot contain properties
// - Must be public" (no private or protected) 
// - Must have abstract methods
// - A class that implements an interface must implement "all the methods"

interface Animal {
    public function typeOfAnimal();
}

class Cat implements Animal {
    public function typeOfAnimal(){
        echo "Domestic Animal";
    }
}

$animal = new Cat();
echo $animal -> typeOfAnimal();


// Using interfaces to manage group of Fruits

interface Fruit{
    public function fruitColor();
}


class Orange implements Fruit{
    public function fruitColor(){
        echo "Orange is Yellow";
    }
}
class Strawberry implements Fruit{
    public function fruitColor(){
        echo "Strawberry is Red";
    }
}
class Apple implements Fruit{
    public function fruitColor(){
        echo "Apple is light Green";
    }
}
class Coconut implements Fruit{
    public function fruitColor(){
        echo "Coconut is White";
    }
}



$orange = new Orange();
$strawberry = new Strawberry();
$apple = new Apple();
$coconut = new Coconut();

$fruits = array($orange, $strawberry, $apple, $coconut);

foreach ($fruits as $fruit){
    $fruit -> fruitColor();
}


?>