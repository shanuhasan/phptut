<?php

$date1 = date_create('2013-03-12');
$date2 = date_create('2013-12-12');

$diff = date_diff($date1,$date2);

echo "<pre>";
print_r($diff);
echo "</pre>";

echo $diff->days . "days<br>";

//%R show + or - sign
//%r only show - sign
//%a total number of day diffrence
echo $diff->format("%R%a days");