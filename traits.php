<?php

trait A {
    function fun1(){
        echo "func1";
    }
}
class B {
    use A;
    function fun2(){
        echo "func2";
    }
}

class C {
    function fun3(){
        echo "fun3";
    }
}

class D {
    use A;
    function fun4(){
        echo "fun4";
    }
}

$obj= new B();
$obj->fun1();
?>