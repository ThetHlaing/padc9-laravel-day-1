<?php

function HelloWorld($otherVar,string $name = "Testing") : string {
    //echo $name;
    //$name = "PADC Myanmar";
    return $name;
}

$myname = "PADC \n";

$result = HelloWorld("Hello");

echo $result;

//var_dump($result);