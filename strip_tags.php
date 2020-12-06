<?php

$str = "This is <b>world</b> so <i>beautiful</i>";

echo strip_tags($str) . "<br>";

$s = "Hello World Here i am";
// true show exact value like 4 char
echo wordwrap($s,4,"<br>",true); // false default value