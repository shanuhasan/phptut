<?php

$a = ['apple','banana','orange','lemon'];

echo "<b>Current : </b>". current($a). "<br>";
echo "<b>Key : </b>". key($a). "<br>";

next($a);

echo "<b>Current : </b>". current($a). "<br>";
echo "<b>Key : </b>". key($a). "<br>";

prev($a);

echo "<b>Current : </b>". current($a). "<br>";

print_r(each($a));