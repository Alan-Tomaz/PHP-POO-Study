<?php

//Class
class Person
{

    //Atributes
    var $name;
    //Methods

    //setter
    function setName($definedName)
    {
        //this reference the actual class
        //the -> access the atributes or methods of a class or objects
        $this->name = $definedName;
    }

    //getter
    function getName()
    {
        return $this->name;
    }
}

//Object
//Instantiate a Class
$person = new Person();

$person->setName("Alan");
echo $person->getName();
