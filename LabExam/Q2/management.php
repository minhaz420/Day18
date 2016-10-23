<?php


class management
{
    public $info1 = "This OOP Exam";
    public $info2 = "Held in BITM LAB";

    public function setName(){
        echo "This is set Data <br/>" . $this->info1;
        echo " " . $this->info2;
    }
}

class studentManagement extends management
{
    public function getName(){
        $object = new management();
        $object->setName();

}
}

?>