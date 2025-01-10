<?php

class Goodbye{
    const LEAVING_MESSAGE = "Thank you for visiting Facebook.com!";
}
echo Goodbye::LEAVING_MESSAGE;



class Fruit{
    const FRUIT_INTRO = "This is the best fruit you must have come across!";

    public function intro(){
        echo self::FRUIT_INTRO;

    }
}

$fruit = new Fruit();
$fruit -> intro();

?>