<?php

$str = "My Friend name is Shanu Hasan. Shanu Hasan from Naugawan";

//count str
echo strlen($str);
echo "<br>";
//count word
echo str_word_count($str);
echo "<br>";

$arr = str_word_count($str,1); //give an array

echo "<pre>";
print_r($arr);
echo "<pre>";

// search word count
echo substr_count($str,"Hasan",30);