<?php
class Student{
    private $name;
    function set_name($str){
        $this->name =   $str;
    }

    public function get_name(){
        return $this->name;
    }

    #destructor
    function __destruct()
    {
        echo "<br>Destructing = ".$this->name;
    }
}

$obj1   =   new Student();
$obj1->set_name("Test");
echo $obj1->get_name();