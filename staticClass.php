<?php
class A {
    public static $num =10;
    public static $n;
    public static function test(){
        echo "<br>Test";
    }
    public static function setValue($str){
        self::$n = $str;
    }

    public static function getValue(){
        return "<br/>".self::$n;
    }
}

echo A::$num;
echo A::test();
echo A::setValue("TAKE CARE");
echo A::getValue();
?>