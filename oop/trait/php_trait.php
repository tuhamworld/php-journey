<?php

trait HelloWorld{
    public function welcomeMsg(){
        echo "Hello World, Welcome!";
    }
}

class Greetings {
    use HelloWorld;

}

$greet = new Greetings();
$greet -> welcomeMsg();


?>