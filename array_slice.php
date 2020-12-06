<?php

$array1 = array('orange','banana','apple','grapes');

$array2 = array('corret','pie');

$a= array_slice($array1,1,2,true);

echo "<pre>";
print_r($a);
echo "</pre>";


?>