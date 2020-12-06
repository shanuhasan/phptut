<?php

$firstname = "Shanu";
$lastname = "Saifi";
$age = 24;

$n = compact("firstname","lastname","age");

echo "<pre>";
print_r($n);
echo "</pre>";