<?php

    // print multi dimetional assoc array
    $mask = array(
        "shanu"=>array("math"=>55, "english"=>69),
        "khan"=>array("math"=>45, "english"=>79)
    );

    echo "<pre>";
    print_r($mask);
    echo "</pre>";


    foreach($mask as $key => $value){
        echo "$key";
        foreach($value as $v){
            echo "$v"."<br>";
        }
    }

    //index array
    $mask = [
        ["Shanu", "Saifi", 12000],
        ["Hasan", "Bhai", 15000]
    ];

    // print array with the hepl of list functions
    $emp = [
        [
            "id"=>1,
            "name"=>"Shanu",
            "lname"=>"Saifi",
            "salary"=>12000
        ],
        [
            "id"=>2,
            "name"=>"Mohd",
            "lname"=>"Qasim",
            "salary"=>13000
        ],
        [
            "id"=>3,
            "name"=>"Shahnawaz",
            "lname"=>"Shanu",
            "salary"=>14000
        ]
    ];
    
    foreach($emp as list("id"=>$id, "name"=>$name,"lname"=>$lname,"salary"=>$salary)){
        echo "$id $name $lname $salary <br>";
    }

    echo "<br><br>";

    //Array Search Functions
    $food = array('orange','banana','apple','grapes');
    echo in_array('apple',$food)."<br>";

    if(in_array('apple',$food)){
        echo "Find Successfully";
    }else{
        echo "Can't Find";
    }
    echo "<br><br>";
    echo array_search('apple',$food);

    $a= array("id"=>1,"name"=>"shanu","lastname"=>"saifi","add"=>"delhi");  
    echo "<br><br>";
    echo array_search('saifi',$a); 

    echo "<br><br>";
    //Change Array Key And Value of the array
    $a= array("id"=>1,"name"=>"shanu","lastname"=>"saifi","add"=>"delhi");    
    $b = array_flip($a);

    echo "<pre>";
    print_r($b);
    echo "</pre>";

    
?>