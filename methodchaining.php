<?php
class abc{
    public function test1(){
        echo "This is test1";
        return $this;
    }
    public function test2(){
        echo "This is test2";
        return $this;
    }
    public function test3(){
        echo "This is test3";
        return $this;
    }
}

$test = new abc();
$test->test1()->test2()->test3();

?>