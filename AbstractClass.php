<?php
abstract Class Test{
    abstract function hello();
}

Class Exam extends Test{
    function hello(){
        echo "HELLO World!";
    }
}

$obj    = new Exam();
$obj->hello();
?>