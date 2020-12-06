<?php

$file = "readme.txt";

if(file_exists($file)){
    echo readfile($file);
    //copy($file,"newfile.txt");
    //rename("newfile.txt","oldfile.txt");
    //unlike or delete same work
    //unlink("oldfile.txt");
}
else{
    echo "File does not exists";
}

// create folder

// if(!file_exists("folder")){
//     mkdir("folder");
// }else{
//     echo "<br>folder already exists";
// }

//remove folder

// if(file_exists("folder")){
//     rmdir("folder");
// }else{
//     echo "<br>folder does not exists";
// }

echo "<br>";

// echo filesize($file);
// echo filetype($file);
// echo realpath($file);

// echo "<pre>";
// print_r(pathinfo($file));
// echo "</pre>";


// $path =realpath($file);
// echo "<pre>";
// print_r(pathinfo($path));
// echo "</pre>";

// $path =realpath($file);
// echo "<pre>";
// print_r(pathinfo($path,PATHINFO_BASENAME));
// echo "</pre>";


// $path =realpath($file);
// echo basename($path);

$path =realpath($file);
echo basename($path,".txt");









