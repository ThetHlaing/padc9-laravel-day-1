<?php

class Person
{

    private $name = 'testing';

    private $title;

    public function __construct($name = "Jane Doe",$title = "MR")
    {
        $this->name = $name;
        $this->title = $title;
    }

    public function display()
    {
        
        echo self::hello() . $this->sayHello() . $this->title . ' '. $this->name;
    }

    public static function hello(){
        return 'Hello ';
    }

    public function sayHello(){
        return 'World ';
    }
}


$james = new Person("James","Mr");

$jd = new Person();

$james->display();

$jd->display();