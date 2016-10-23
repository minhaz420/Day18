<?php

class calculator
{
    private $num1 = '';
    private $num2 = '';

    public function setData($data)
    {
        $this->num1=$data['num1'];
        $this->num2=$data['num2'];
    }

    public function getData(){
        echo $this->add();
        echo $this->sub();
        echo $this->mul();
        echo $this->div();
    }

    public function add(){
        echo "Result : <br/> Addition is " . ($this->num1 + $this->num2);
    }

    public function sub(){
        echo "</br>Substraction is " . ($this->num1 - $this->num2);
    }
    public function mul(){
        echo "</br> Multiplication is " . ($this->num1 * $this->num2);
    }

    public function div(){
        echo "</br> Division is " . ($this->num1 / $this->num2);
    }
}

?>