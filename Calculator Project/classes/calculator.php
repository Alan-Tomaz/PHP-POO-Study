<?php

class Calculator
{

    private $total;
    private $num1;
    private $num2;

    function __construct()
    {
        $this->total = 0;
        $this->num1 = 0;
        $this->num2 = 0;
    }

    public function setNumberOne($numberOneParameter)
    {
        $this->num1 = $numberOneParameter;
    }

    public function setNumberTwo($numberTwoParameter)
    {
        $this->num2 = $numberTwoParameter;
    }

    public function calculate($operation)
    {
        switch ($operation) {
            case "+":
                $this->total = $this->num1 + $this->num2;
                break;
            case "-":
                $this->total = $this->num1 - $this->num2;
                break;
            case "*":
                $this->total = $this->num1 * $this->num2;
                break;
            case "/":
                $this->total = $this->num1 / $this->num2;
                break;
        }
    }

    public function getTotal()
    {
        return $this->total;
    }
}
