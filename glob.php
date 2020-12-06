<?php

// echo "<pre>";
// print_r(glob("*"));
// echo "</pre>";

// echo "<pre>";
// print_r(glob("test/*"));
// echo "</pre>";

// echo "<pre>";
// print_r(glob("*.txt"));
// echo "</pre>";

// echo "<pre>";
// print_r(glob("a*"));
// echo "</pre>";

// echo "<pre>";
// print_r(glob("*ra*"));
// echo "</pre>";

// echo "<pre>";
// print_r(glob("a*hp"));
// echo "</pre>";

// echo "<pre>";
// print_r(glob("[ra]*"));
// echo "</pre>";

$arr = glob("*");


// foreach($arr as $filename){
//     echo "{$filename} size:". filesize($filename)."<br>";
// }

// foreach($arr as $filename){
//     echo "{$filename} path:". realpath($filename)."<br>";
// }

// add / in folder
// echo "<pre>";
// print_r(glob("*",GLOB_MARK));
// echo "</pre>";


// echo "<pre>";
// print_r(glob("z*",GLOB_NOCHECK));
// echo "</pre>";


// echo "<pre>";
// print_r(glob("*",GLOB_ONLYDIR));
// echo "</pre>";

echo "<pre>";
print_r(glob("{*.html,*.txt}",GLOB_BRACE));
echo "</pre>";