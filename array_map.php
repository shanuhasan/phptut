<?php
function square($n){
    return  $n*$n;
}

$a= [1,2,3,4,5];

$n = array_map("square",$a);
echo "<pre>";
print_r($n);
echo "</pre>";


//multidimentional assoc array 
function square1($n,$m){    
    return  [$n = $m];
}

$a1= [1,2,3,4,5];
$b1 = ["banana","apple","orange","lemon","pineapple"];

$n1 = array_map("square1",$a1,$b1);
echo "<pre>";
print_r($n1);
echo "</pre>";
