<?php

$a = array('red','green','blue','black');

$n = array_rand($a);

echo "<pre>";
print_r($n);
echo "</pre>";

echo $a[$n];

shuffle($a);

echo "<pre>";
print_r($a);
echo "</pre>";