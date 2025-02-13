<?php
class Student{
    private $name;
    function __construct($str)
    {
        $this->name =   $str;   
    }
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

///////////// Inherited Class /////////
Class Newstudent extends Student{
    function __construct()
    {
        echo "<br/>Child Class Constructor";
        parent::__construct("Parent Arguement");
    }
}

$obj1   =   new Student("Test");
$obj1->set_name("Test");
echo "<br>".$obj1->get_name();
$obj2   = new Newstudent();
$obj2->set_name("Class2");
echo "<br>".$obj2->get_name();