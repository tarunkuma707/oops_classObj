<?php
//  require "autoloadClasses/first.php";
//  require "autoloadClasses/second.php";

 spl_autoload_register(function($class){
    require "autoloadClasses/".$class.".php";
 });

 $test = new first();
 $test = new second();
?>