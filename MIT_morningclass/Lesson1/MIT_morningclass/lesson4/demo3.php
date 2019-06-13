<?php

#Besides the built-in PHP functions, we can create our own functions.

#A function is a block of statements that can be used repeatedly in a program.

#A function will not execute immediately when a page loads.

#A function will be executed by a call to the function.

/*
function functionName(){
    block of code to execute;
}

*/
#creating/declaring a function
function sayhelloworld(){
    echo "hello world <br>";
    echo "hello world <br>";
    echo "hello world <br>";
}

sayhelloworld();#calling a function
$x = strrev("hello world");
echo $x;
echo "<br>";
#use parameter when declaring a function
function greetings($name, $age){
    echo "My name is $name and my age is $age years old";
}
#use arguement when calling a function
greetings("ashley", 19);


#create a function that takes a number, and it echos out the square of the number
echo "<br>";
function square($num){
    echo $num * $num;
}

square(10);


echo "<br>";
$x = strrev("wassup yoo");
echo $x;
echo "<br>";

echo "<br>";
function reverse($name){
    echo $name;
}

reverse("warrup yoo");

echo "<br>";
function getmod($num1, $num2){
    $result = $num1 % $num2;
    return $result;
}

$getTheMod = getMod(3,2);
echo $getTheMod;
echo "<br>";
echo "<br>";
function church($pastor = "Ng'ang'a"){
    echo "My pastor is $pastor";
}

church("Joseph");














































?>