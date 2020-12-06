<?php

$array1 = array('orange','banana','apple','grapes');

$l = count($array1);

for($i=0; $i<$l;$i++)
{
    echo $array1[$i]."<br>";
}

foreach($array1 as $a)
{
    echo $a."<br>";
}