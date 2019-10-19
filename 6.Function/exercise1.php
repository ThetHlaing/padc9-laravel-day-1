<?php 

//Create a sum function
//If parameters are not set, use 0 as default
//Return type and parameter types must only allow number types

function sum(int $first = 0,int $second = 0) : int{
    return $first + $second;
}


echo sum(1,2); //3
echo sum(1); //1
echo sum("testing"); //Error