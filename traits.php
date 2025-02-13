<?php

trait A {
    function fun1(){
        echo "A:Func1 A";
    }
}

trait B {
    function fun1(){
        echo "<br/>B:Func1 B";
    }
    function fun2(){
        echo "<br/>B:Func2";
    }
}

Class Class1{
    use A,B{
        A::fun1 insteadOf B;
        B::fun1 as fun1B;////////// Alias of Function in traits ///
    }
    public function func3(){
        echo "<br/>Class3: Func3";
    }
}
$obj =  new Class1();
$obj->fun1();
$obj->fun1B();
$obj->fun2();
$obj->func3();