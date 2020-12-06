<?php

$str = "PHP is the web scripting php language of choice";

//$exp = preg_match("/PHP/",$str);
// $exp = preg_match("/php/i",$str);

// if($exp){
//     echo "A found match";
// }else{
//     echo "Not found match";
// }
// echo "<br>";

// $exp1 = preg_match_all("/php|web|the/i",$str,$array);

// if($exp1){
//     echo "A match was found";
// }else{
//     echo "A match was not found";
// }

echo "<br>";

$exp2 = preg_match_all("/[w]/i",$str,$array);

if($exp2){
    echo "A match was found";
}else{
    echo "A match was not found";
}

echo "<pre>";
print_r($array);
echo "</pre>";

echo $array[0][0];