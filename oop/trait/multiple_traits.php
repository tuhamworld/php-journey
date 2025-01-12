<?php

trait HelloWorld{
    public function welcomeMsg1(){
        echo "<p>Hello World, Welcome!</p>";
    }
}

trait TuhamWorld {
    public function welcomeMsg2(){
        echo "<p>Hello there, Welcome to TuhamWorld</p> ";
    }
}





class GreetTuham {
    use TuhamWorld, HelloWorld;
}

$greet = new GreetTuham();
$greet ->welcomeMsg1();
$greet ->welcomeMsg2();

?>