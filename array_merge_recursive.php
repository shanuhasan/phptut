<?php

$array1 = array("a"=>'orange',"b"=>'banana',"c"=>'apple',"d"=>'grapes');

$array2 = array("e"=>'corret',"f"=>'pie');

$a= array_merge($array1,$array2);

echo "<pre>";
print_r($a);
echo "</pre>";


?>