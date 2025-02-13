<?php

trait A {
    function fun1(){
        echo "Func1";
    }
}

trait B {
    function fun2(){
        echo "Func2";
    }
}

Class Class1{
    use A,B;
    public function func3(){
        echo "<br/>Class3: Func3";
    }
}
$obj =  new Class1();
$obj->fun1();
$obj->fun2();
$obj->func3();