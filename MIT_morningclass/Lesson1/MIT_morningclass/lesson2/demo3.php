<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 5/30/19
 * Time: 11:59 AM
 */

#PHP operators
#1.Arithmetic operators
#Addition : +
#subtraction : -
#multiplication : *
#division : /
#modulus : %
#exponential : **


$x = 100;
$y = 7;
#addition
$z = $x + $y;
echo $z;
echo "<br>";
$a = $x % $y;
echo $a;

#assignement operators
#They are used to wright a value to a variable

$s = 1;
$d = 3;
$s += 23;# $s = $s + 23;
$d = -12;# $d = $d - 12;
$d = *12;# $d = $d + 12;
$d = 12;
$d = 12;
$d = 12;
$d = 12;

#PHP Comparison operators
$t = 1000000;
$r = 11000000;
#1.== equal
echo $t == $r;
#2.=== identical
#returns true if one variable is equal to another variable and they are of the same data types
$u = 100;# integer
$l = 12.12;# float



var_dump($u === $l);#false
echo "<br>";
var_dump($u !=$l);#true
echo "<br>";
var_dump($u >=$l);#true

#increament and decreament operators
#use them in conjuction with variables
#++ : Increament
#-- : Decreament

$b = 0;
$c =5;
echo ++$b;# 1 : Pre-increament, increaments $b by one, then return the results
echo "<br>";
echo $c++;#5 :Post-increament, returns $, then increament $c by one

# Logical operators
# Used to combine conditional statements
# 1. and : $x and $c : True if both $x and $c are true
# 2. or : $x or $c: True if either $x or $c is true
# 3. xor: $x xor $c : True if either $x or $c is true but not both
# 4. && : $x && $c : True if both $x and $c are true
# 5. || or : $x || $c : True if either $x or $y is true
# 6. ! : !x : True if $x is not true

$x = 100;
$y = 50;
if($x == 100 and $y == 50){
    echo "Conditions are true";
}

if($x == 99 or $y == 50){
    echo "One condition is not true";
}

if($x == 99 || $y == 50){
    echo "One condition is not true";
}

if(!$x == 99){
    echo "$ is not equal to 99";
}

#string operators
$name = "Php";
$name_two = "Developer";
echo $name.$name_two;
#Concatenation assignement
$Firstname = "John";
$Secondname = "Doe";
echo $Firstname.=$Secondname; #$Firstname = $Firstname.Secondname









?>