<?php

//only read
$file = fopen("readme.txt","r");
//echo fread($file,100);
//echo fread($file,filesize("readme.txt"));

//first line read
//echo fgets($file);
//echo ftell($file); // cursour position

//fseek($file,10);// change cursour position
//echo "<br>". fgets($file);


//echo "<br>". fpassthru($file);//read rest file 

//end of file 
// while(! feof($file)){
//     $line = fgets($file);
//     echo $line."<br>";

// }

//read first character
//echo fgetc($file);

echo "<pre>";
print_r(file("readme.txt"));
echo "</pre>";