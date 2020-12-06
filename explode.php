<?php

$str = "This is explode here";
$arr = ["This","is","implode","here"];

 $a = explode(" ", $str);
//$a = implode(" ", $arr);

echo "<pre>";
print_r($a);
echo "</pre>";

function MyExplode($delimeter,$text){

    $array=[];
    $string="";
    $ignored="";
    $count=0;
    
    for ($i=0; $i < strlen($text); $i++) 
    { 
        for ($k=0; $k < strlen($delimeter); $k++) { 
            for ($j=$i; $j < $i+strlen($delimeter); $j++) { 
                if (isset($text[$j])) {
                    $ignored=$ignored.$text[$j];
                }
            }
            if ($ignored==$delimeter) {
                $array[$count]=$string;
                $string="";
                $count++;
                $ignored="";
                $i=$i+strlen($delimeter)-1;
                break;
            }
            else{
                $string=$string.$text[$i];
                $ignored="";
                if ($i==strlen($text)-1) {
                    $array[$count]=$string;
                }
                break;
            }
        }
    }
    
    return $array;
    
    }
    
    $text="This is my expload";
    $delimeter="or";
    
    echo "<pre>";
    print_r(MyExplode($delimeter,$text));
    echo "</pre>";