<?php

$a = [1,2,3,4,6,7,8,9,10,12];


// function missing_number($num_list)
// {

// $new_arr = range($num_list[0],max($num_list));

// return array_diff($new_arr, $num_list);

// }

// echo "<pre>";
// print_r(missing_number($a));
// echo "</pre>";

$a2 = range(1,max($a));

$missing = array_diff($a2,$a);

echo "<pre>";
print_r($missing);
echo "</pre>";

echo "<pre>";
print_r($a2);
echo "</pre>";


?>  