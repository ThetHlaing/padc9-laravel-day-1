<?php

class Person
{

    private $name;

    
    public function setName($name)
    {

        $this->name = strtoupper($name);
    }

    public function getName()
    {
        return 'Mr.'. $this->name;
    }

}

$james = new Person();
$james->setName("Jame");
echo $james->getName();