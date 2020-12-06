<?php

$date = date_create('2020-01-15');

//add
//date_add($date , date_interval_create_from_date_string('30 days'));

//substraction
//date_sub($date , date_interval_create_from_date_string('30 days'));

//modify
date_modify($date , "-10 days");
echo date_format($date , 'd-m-Y');