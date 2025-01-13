<?php
// Static methods can be called directly without creating an instance


// It is created using static
class Greetings{
    public static function welcomeMessage(){
        echo "Howdy, Welcome to TuhamWorld!";
    }
}

// It is called using double colon

Greetings::welcomeMessage();




?>