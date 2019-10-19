<?php

function HelloWorld(string &$name) : string {
    echo $name;
    $name = "PADC Myanmar";
    return $name;
}

$myname = "PADC";

$result = HelloWorld($myname);

echo $myname;

var_dump($result);