<?php

//Class
class Feline
{

    //Atributes
    var $isMammal = true;
    //Methods

    function run()
    {
        echo "Run as a Feline";
    }
}

//child class or subclass
class Cheetah extends Feline
{
    //Polimorphism
    function run()
    {
        echo "Run as a Cheetah";
    }
}

//Object
//Instantiate a Class
$cheetah = new Cheetah();

//atribut inherritance
echo $cheetah->isMammal . "<br>";
echo $cheetah->run();
