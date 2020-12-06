<?php
$b=array("1"=>"Carrot","2"=>"Tomatoes");
$a= array(
    "a"=>"Apple",
    "b"=>"Banana",
    "c"=>"Orange",
    "d"=>"Lemon"
);

array_walk($a,"myFunction","is a key of");

$veggie=array("1"=>"Carrot","2"=>"Tomatoes");
$fruits= array(
    $veggie,
    "a"=>"Apple",
    "b"=>"Banana",
    "c"=>"Orange",
    "d"=>"Lemon"
);
echo "<br>";
array_walk_recursive($fruits,"myFunction","is a key of");

function myFunction($value,$key,$para)
{
    echo "$key $para $value <br>";
}