<?php

$str = "hello";

echo "The String : " . $str . "<br>"  ;

echo "md5 binary: " . md5($str,true) . "<br>"  ;
echo "md5 hexa number: " . md5($str,false) . "<br>"  ; //default value

echo "sha1 binary : " . sha1($str,true) . "<br>"  ;
echo "sha1 hexa  : " . sha1($str) . "<br>"  ; //default value
