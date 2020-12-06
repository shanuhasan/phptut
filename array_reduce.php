<?php

function shanu($n,$m){
    return $n+$m;
}

$a = [1,2,3,4,5];

$new = array_reduce($a,"shanu",3);

echo "<pre>";
print_r($new);
echo "</pre>";
