<?php

$a = ['a','b','c','d','e'];

$new = array_fill_keys($a,'Shanu');

echo "<pre>";
print_r($new);
echo "</pre>";

foreach($new as $n)
{
    echo  $n."<br>";
}

$new2 = array_fill_keys( 1, 5, "Shanu");

print_r($new2);