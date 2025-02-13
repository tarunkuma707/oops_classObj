<?php
///////// Interface //////////
interface A{
    function test();
}

interface X{
    function hello();
}

class B implements A, X{
    function test(){
        //////////// Write your own logic ////////
    }
    function hello(){
        //////////// Write your own logic ////////
    }
}
$obj = new B();
$obj->test();
$obj->hello();
?>