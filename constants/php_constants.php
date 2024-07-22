<?php
// Constants are like variables except that once they are defined, they cannot be changed or undefined.
// Constants starts with a letter or underscore unlike variables which starts with $ sign

//  define(name, value)


define("Greetings", "Welcome to TuhamWorld");
echo Greetings;

// You can also use the const to define

const name = "Tunde Abdulhamid Sanusi";
echo name;


// Major difference between define() vs const

// const cannot be created in another block scope while define() can be created inside another block scope.


function myName(){
    echo Greetings;
}

myName();

?>