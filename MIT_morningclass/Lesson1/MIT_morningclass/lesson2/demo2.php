<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 5/30/19
 * Time: 11:59 AM
 */

#constants are like variables except that once created they cannot be changed
#constant starts with a letter or underscore
#no $ sign before the constant name
#constant are global
#To define a constant use define()
#syntax
#define(name, value, case-insensitive)


define("coordinates", 90, false);
echo coordinates;
echo "<br>";
define("height", 5.7, false);
echo height;


#constant Arrays
#$fruits = array(["banana", "mango", "apple"]);
define("fruits",["banana", "mango", "apple"]);
echo fruits[0];
echo "<br>";
echo fruits[1];
echo "<br>";
echo fruits[2];





















?>