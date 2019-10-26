<?php

//Create Calculator Class which can request 2 variable at the constructor
//Class must have add,substract,multiply and divide methods

class Calculator
{
    private $first_var;
    private $second_var;

    function __construct($first, $second)
    {
        $this->first_var = $first;
        $this->second_var = $second;
    }

    function sum()
    {
        return $this->first_var + $this->second_var;
    }


    function substract()
    {
        return $this->first_var - $this->second_var;
    }

    function divide()
    {
        return $this->first_var / $this->second_var;
    }

    function multiply()
    {
        return $this->first_var * $this->second_var;
    }

    
}

$calculator = new Calculator(10, 20);
echo $calculator->sum() . "\n";
echo $calculator->substract() . "\n";
echo $calculator->divide() . "\n";
echo $calculator->multiply() . "\n";
