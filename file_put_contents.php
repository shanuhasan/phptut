<?php

//write file

//remove old text
//echo file_put_contents("readme.txt","This is new line.");

// append existing text
//echo file_put_contents("readme.txt","This is new text.",FILE_APPEND);

// security purpose
echo file_put_contents("readme.txt","This is new text.",FILE_APPEND | LOCK_EX);


//read file

echo file_get_contents("readme.txt");

echo file_get_contents("readme.txt",false,null,0,100);


