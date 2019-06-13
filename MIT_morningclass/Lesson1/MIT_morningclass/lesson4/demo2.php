<?php

#PHP LOOPS
#1.while -loops through a block of code as long as the specified condition is true
#2.do...while - loops through a block of code ONCE and then repeats the loops AS LONG AS the specifid condition is true
#3.for
#4.foreach

#syntax
/*
 while(condition){
    code to execute;
 */

$x = 0;
while($x < 10){
    echo $x. "Hello world <br>";
    $x++;
}

#do...while
#NOTE: The condition is tested after
/*
 do{
    code to execute
} while(condition is true)
 */
do{
    echo "helo world <br>";
    $x++;
}while($x <10);

#for loop
#PHP for loops
#execute a block of code a specified number of times.
#syntax
/*
 for(init counter; test counter; increament counter){
code to execute;
}
 */


for($y = 0;$y < 10;$y++){
    echo $y. "Hello world <br>";
}

#foreach
#The foreach loop works only on arrays, and is used to loop through each key/value pair in an array.

#Syntax
/*
foreach($array as $value)
    code to execute
*/

$languages = array("html","css","bootstrap","php");

foreach($languages as $language){
    echo "$language <br><br>";
}





$n = 0;
while ($n <= 50){
    if($n % 2 == 0 and $n != 0){
        echo "$n is divisible by 2 <br>";
    }elseif($n % 3 == 0 and $n != 0){
        echo "$n is divisible by 3 <br>";
        echo "<br>";
    }
    $n++;

}































































?>