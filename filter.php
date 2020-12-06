<?php

$var = 20;

// Stntex - filter_var(var,filterName,options/flag)

$options = array(
                "options"=>array('min_range'=>20,'max_range'=>30)
);

// echo filter_var($var,FILTER_VALIDATE_INT);

var_dump(filter_var($var,FILTER_VALIDATE_INT));


if(filter_var($var,FILTER_VALIDATE_INT,$options)){
    echo "<br>$var is Integer";
}else{
    echo "<br>$var is not Integr";
}


// validate the variable is integer/float/email/url... or not 