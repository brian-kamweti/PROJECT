<?php


#Php condition statements
#1. if statement : Executes some code if ONE condition is true
#2. if...else
#3. if...elseif...else
#4. switch

/*
 if(condition){
code to execute
}
 */

$gender = "Female";
if ($gender == "Female"){
    echo "Happy womens' day";
}
echo "<br>";


if ($gender == "Female"){
    echo "Happy womens' day";

}else{
    echo "Happy Mens' day";
}

echo "<br>";
if ($gender == "SomethingElse"){
    echo "Happy womens' day";

}elseif($gender== "Other"){
    echo "Happy Others' day";
}else{
    echo "You are not a human being, maybe a BIGFOOT";
}
echo "<br>";
$t = date("H");
echo $t;

if ($t == "09"){
    echo "good morning";
}

echo "<br>";
$t = date("H");
echo $t;

if ($t <= "12"){
    echo "good morning";
}else{
    echo "good morning";
}

echo "<br>";
$t = date("H");
echo $t;
if ($t <= "12"){
    echo "good afternoon";
}elseif($t =="12"){
    echo "good afternoon";
}elseif($t >= "12" and $t <= "17"){
    echo "good evening";
}else{
    echo "have a good day";
}

#The switch statement is used to perfom actions based on different conditions
#Blocks of code to be executed
#Syntax
/*
 switch(n){
    case labell:
        code to be executed;
        break:
    case labell:
        code to be executed;
        break;
    case labell:
        code to executed;
        break;
    default:
        code to execute if n is different from labels;
}

 */
echo "<br>";
switch('Female'){
    case 'Male':
        echo 'I am a male';
        break;

    case 'Female':
        echo 'I am a female';
        break;

    case 'other':
        echo 'I am other';
        break;

    default:
        echo "Non of the above";





}































?>