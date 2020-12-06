<?php

if(is_file("readme.txt")){
    echo "Yes it is file.";
}else{
    echo "No it is not a file.";
}

echo "<br>";


if(is_dir("test")){
    echo "Yes it is folder.";
}else{
    echo "No it is not a folder.";
}
echo "<br>";

if(is_writeable("test.txt")){
    echo "Yes it is writeable.";
}else{
    echo "No it is not a writeable.";
}
echo "<br>";

if(is_readable("test.txt")){
    echo "Yes it is readable.";
}else{
    echo "No it is not a readable.";
}
echo "<br>";

if(is_executable("test.txt")){
    echo "Yes it is executable.";
}else{
    echo "No it is not a executable.";
}