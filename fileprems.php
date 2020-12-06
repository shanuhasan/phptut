<?php

echo fileperms("readme.txt")."<br>";
echo fileperms("test.txt")."<br>";

//return octal foprm
echo decoct(fileperms("test.txt"))."<br>";

echo substr(decoct(fileperms("test.txt")),2)."<br>";

// give file permision
//chmod("readme.txt",0600);

