<?php
//ARRAY FUNCTIONS:
/*
    //1.extract(array) .(,rule,prefix)->optionals
    //converts arrays key,value into variables name,value

    $state = array(
        "AS"=>"ASSAM",
        'MP'=>"MADHYA PRADHESH",
        "MH"=>"MAHARASHTRA",
        12=>"PUNE"
    );
    extract($state);
    echo "$AS <br><br>";
    // echo "$AS <br> $12 = ".$12;


    //2.implode() : joins array ,returns string

    //$array is arrayname . its not keyword array() is constructor
    $array = ['Breakfast','Lunch','Dinner'];
    echo implode("-",$array)."<br><br>";

    //3.explode() : string to array conversion using separator liked a split. 
    $str="Pune Mumbai Solapur Satara";
    $arr=explode(" ",$str);
    // print_r(explode(" ",$str));
    var_dump($arr);
    // echo var_dump($arr);

*/
    //4. array_flip() : exhange key and values. keys to value and value to keys .
    $input = array("a"=>1,"B"=>2,"c"=>3);
    // $input = array("a"=>1,"B"=>1,"c"=>3);// 1 repeated 
    $flipped = array_flip($input);
    print_r($flipped);

?>