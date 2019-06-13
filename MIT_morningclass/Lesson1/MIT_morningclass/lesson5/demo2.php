<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = $_REQUESTED['name'];
    $country = $_REQUESTED['country'];


    if (empty($name)&& empty($country)){
        echo "Name and country fields are empty";
    }else{
        echo $name. "<br>";
        echo $country. "<br>";
    }
}






















































?>