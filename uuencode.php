<?php

$str = "Hello World Shanu";

$encode = convert_uuencode($str);
echo $encode . "<br>";

$decode = convert_uudecode($encode);
echo $decode;