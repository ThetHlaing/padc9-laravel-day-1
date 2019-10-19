<?php

$fruits = ["orange","apple"];

$items = ['value1'=>'TV', 'value2'=> 'Sofa', 'value3'=> 'Cabin', 'value4'=> 'Table'];
 
$records = array(
    array(
        'id' => 2135,
        'first_name' => 'John',
        'last_name' => 'Doe',
    ),
    array(
        'id' => 3245,
        'first_name' => 'Sally',
        'last_name' => 'Smith',
    ),
    array(
        'id' => 5342,
        'first_name' => 'Jane',
        'last_name' => 'Jones',
    ),
    array(
        'id' => 5623,
        'first_name' => 'Peter',
        'last_name' => 'Doe',
    )
);
var_dump($items);   

var_dump(array_keys($items));

var_dump(array_column($records,'last_name'));

//Ref: https://www.php.net/manual/en/ref.array.php
