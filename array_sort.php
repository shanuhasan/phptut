<?php

//$a= ['orange','apple','lemon','banana'];
// $a= array(
//     "b"=>"Apple",
//     "d"=>"Banana",
//     "c"=>"Orange",
//     "a"=>"Lemon"
// );
sort();
rsort();
asort();
arsort();
ksort();
krsort();
natsort();
natcasesort();
array_multisort();
array_reverse();

$a =array('Img12.png','Img10.png','img11.png','img13.png');
natcasesort($a);

echo "<pre>";
print_r($a);
echo "</pre>";
