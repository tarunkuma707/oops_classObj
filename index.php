<?php
class Student{
    public $name;
    function __construct($str)
    {
        $this->name =   $str;
    }

    public function get_name(){
        return $this->name;
    }
}

$obj1   =   new Student("ABC");
echo $obj1->get_name();