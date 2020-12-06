<?php

// $array1 = array('orange','banana','apple','grapes');

// $array2 = array('corret','pie');

$array1 = array("a"=>array('orange'),"b"=>array('banana'),"c"=>array('apple','grapes'));
$array2 = array("a"=>array('yello'),"b"=>array('gray'));

$a = array_replace_recursive($array1,$array2);

echo "<pre>";
print_r($a);
echo "</pre>";

?>