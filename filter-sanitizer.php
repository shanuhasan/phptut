<?php

$var = "mohd(shanu)\\2@gmail\\\.com";

$var = filter_var($var, FILTER_SANITIZE_EMAIL);


if(filter_var($var,FILTER_VALIDATE_EMAIL)){
    echo "<br>$var is Valid Email";
}else{
    echo "<br>$var is not Valid Email";
}
