<?php
class Student{
    public $name;
    public function set_name($str){
        $this->name =   $str;
    }

    public function get_name(){
        return $this->name;
    }
}

$obj1   =   new Student();
$obj1->set_name("ABC");
echo $obj1->get_name();