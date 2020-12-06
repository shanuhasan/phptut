<?php

// echo getcwd()."<br>";

// chdir("test");

// echo getcwd();

$dir = ".";
//or
//$dir =getcwd();

// echo "<pre>";
// print_r(scandir($dir));
// echo "</pre>";


if(is_dir($dir)){
    if($d = opendir($dir)){
        while($file = readdir($d)){
            echo "Filename :".$file."<br>";
        }
        closedir($d);
    }
}