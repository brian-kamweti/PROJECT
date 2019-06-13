<?php

#php arrays
#array()
#$variablename = array('benz', 'toyota')

$cars = array('benz', 'toyota', 'audi', 'ford');
#$cars[0] == 'benz'
#$cars[1] == 'toyota'

echo $cars[0];
echo "<br>";
echo $cars[2];

echo "<br>";

echo "I like ".$cars[0]. "," .$cars[1] . "," .$cars[2] . "," .$cars[3];

echo "<br>";
$num_cars = count($cars);
#echo num_cars;
echo count($cars);


#for (init_count; test_count; increament_count){}

for ($x = 0; $x < $num_cars; $x++){
    echo $x.".". $cars[$x]."<br>";
}


#php associative arrays
#associative arrays are arrays that use named keys that you assign to them.
$food = array("uganda"=>"matoke" , "kenya"=>"sembe" , "tanzania"=>"wali" ,);
echo $food["uganda"];
echo "<br>";
echo "I love eating ".$food["uganda"]. "," .$food["kenya"]. " and " .$food["tanzania"];
echo "<br>";
foreach($food as $country =>$dish){
    echo $country. " : ". $dish. "<br>";
}

$electronics = array();# empty array

$electronics['phone'] = ' huawei';
$electronics['laptop'] = 'yoga';
$electronics['tv'] = 'samsung';


foreach($electronics as $device=>$brand){
    echo $device. " : ". $brand."<br>";
}






































?>