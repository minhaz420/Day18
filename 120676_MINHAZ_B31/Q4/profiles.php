<?php


class profiles
{
    private $password = "Something";

    protected function getInfo(){
        echo "Your Password is " . $this->password;
    }

    public function someThing(){
        echo $this->getInfo();
    }
}
