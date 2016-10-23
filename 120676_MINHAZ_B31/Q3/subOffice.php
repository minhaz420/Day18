<?php


class subOffice
{
    protected $v1 = "This is set protected Property";
    protected $v2 = "This is get Protected Property";

    protected function set(){

        echo $this->v1;
    }

    protected function get(){

        echo $this->v2;

    }
}

class mainOffice extends subOffice
{
    public function info(){

        echo $this->set() . "</br>";
        echo $this->get();

    }
}


?>