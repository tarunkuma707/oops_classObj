<?php
require "products.php";
require "testing.php";
use test as t;
$obj = new t\Products();
$obj->wow();
echo "<br/>THIS IS PRODUCTS";
use pro as p;
$obj1 = new p\Products();
$obj1->wow();
?>