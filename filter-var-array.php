<?php

$arr = array(
    "name"=> "<h1>Shanu Hasan</h1>",
    "marks"=> 89,
    "email"=>"mohdshanu/2@gmail.com"
);

$filters = array(
    "name"=> array(
        "filter"=>FILTER_SANITIZE_STRING,
        "flags" => FILTER_FLAG_STRIP_HIGH
    ),
    "marks"=> array(
        "filter"=> FILTER_VALIDATE_INT,
        "options"=>array(
            "min_range"=>1,
            "max_range"=>100
        )
    ),
    "email" => FILTER_SANITIZE_EMAIL
);

echo "<pre>";
print_r(filter_var_array($arr,$filters));
echo "<pre>";