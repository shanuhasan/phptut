<?php

echo "<pre>";
print_r(date_parse("2020-02-12 12:30:26.5"));
echo "</pre>";

$date = date_parse("2020-02-12 12:30:26.5");

echo $date['day'];

echo "<pre>";
print_r(date_parse_from_format("d.n.Y","15.3.2020"));
echo "</pre>";