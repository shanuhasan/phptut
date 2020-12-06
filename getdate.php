<?php

$olddate = mktime(0,0,0,03,15,2020);

$date =  getdate();

echo $date['month'];

echo "<pre>";
print_r(getdate());
echo "<pre>";

echo "<pre>";
print_r(gettimeofday());
echo "<pre>";

echo "<pre>";
print_r(localtime(time(),true));
echo "<pre>";

echo "<pre>";
print_r(localtime($olddate,true));
echo "<pre>";
