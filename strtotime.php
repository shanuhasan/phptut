<?php

echo date('d-m-Y',strtotime('now'));
echo "<br>";
echo date('d-m-Y',strtotime('3 march 2020'));
echo "<br>";
echo date('d-m-Y H:m',strtotime('+3 hour'));
echo "<br>";
echo date('d-m-Y H:m',strtotime('+1 week'));
echo "<br>";
echo date('d-m-Y H:m',strtotime('next Monday'));
echo "<br>";
echo date('d-m-Y H:m',strtotime('last Sunday'));
echo "<br>";
echo date('d-m-Y H:m',strtotime('first day of last month'));