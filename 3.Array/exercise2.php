<?php
//Merge two arrays with their associate countries

$cities = [
    ['country_id' => 1, 'name' => 'Madrid'],
    ['country_id' => 1, 'name' => 'Barcelona'],
    ['country_id' => 3, 'name' => 'Roma'],
    ['country_id' => 3, 'name' => 'Milan'],
    ['country_id' => 2, 'name' => 'Manchester'],
    ['country_id' => 2, 'name' => 'Liverpool'],
    ['country_id' => 2, 'name' => 'London']
];

$countries = [
    ['id' => 1, 'name' => 'Spain'],
    ['id' => 2, 'name' => 'UK'],
    ['id' => 3, 'name' => 'Italy']
];

//Do a foreach Loop for countries

//get id of the country
//Filter the city with array_filter
//Apend the country array with associate cities by using the index from foreach


//assign cities to the related country


var_dump($countries);
