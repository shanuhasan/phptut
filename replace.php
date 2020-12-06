<?php

$str = "Hello world. This world is nice";

echo str_replace("Hello","Hi",$str)."<br>";
echo str_ireplace("hello","Hi",$str)."<br>";

$f = ["Hello" , "This"];
$r = ["Hey" , "That"];

echo str_replace($f,$r,$str)."<br>";

$color = ["red" , "blue","white","black"];
echo "<pre>";
print_r(str_ireplace("red","pink",$color));
echo "</pre>";
