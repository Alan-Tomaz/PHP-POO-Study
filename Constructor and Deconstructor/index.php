<?php

class Person
{
    private $name;

    function run()
    {
        echo $this->name . " is running<br>";
    }

    function __construct($nameParameter)
    {
        echo "Constructor Initialized <br>";
        $this->name = $nameParameter;
    }

    function __destruct()
    {
        echo "Object Deleted";
    }
}

$person = new Person("Alan");
$person->run();
