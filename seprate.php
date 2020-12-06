<?php

$string = "DLR8OWO3L9LE2H";
$str1 = '';
$str2 = '';
for ($index=0;$index<strlen($string);$index++) {
    if(isNumber($string[$index]))
        $str2 .= $string[$index];
    else    
        $str1 .= $string[$index];
}
echo "str1:" .strrev($str1). "<br>str2: $str2";


function isNumber($c) {
    return preg_match('/[0-9]/', $c);
}