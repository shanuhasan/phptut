<?php

//add line of the beggning
// $file = fopen("readme.txt","r+");
// fwrite($file,"This is a new line.");


//remove old text
//$file = fopen("readme.txt","w+");
//fwrite($file,"This is a new line.");

$file = fopen("readme.txt","a+");
fwrite($file,"\nThis is a new line.");

// fput() = fwrite()

//read only 10 char and rest delete 
ftruncate($file,10);