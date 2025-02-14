<?php
namespace pro;
class Products{
    public function __construct()
    {
        echo "This is product page class<br/><br/><br/>"; 
        $test = new \test\Products();
    }

    function wow(){
        echo "<br/><br/><br/>WOW from Products.<br/>";
    }
}
?>