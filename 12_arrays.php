<?php

//1.INDEX/NUMERIC ARRAY :

// First method to create array.
/*$numbers=array(1,2,3,4,5);

foreach($numbers as $value){
    echo "Value is $value<br/>";
}*/

//Second method to create array.
$numbers[0]="one";
$numbers[1]="two";
$numbers[2]="three";
$numbers[3]="four";
$numbers[4]="five";

foreach($numbers as $value){
    echo "Value is $value <br />";
}


//2. ASSOCIATIVE ARRAY :

// First method
$Salaries = array("prathmesh"=>2000,"ganesh"=>5000,40=>"200");
// ?

//Date : 29 jan--
    //remain short starting lec associative array.
    $emp['ID']=1;
    $emp["Name"]="Prathmesh";
    echo "Name: ".$emp['Name']," <br>";
    echo "Id: ".$emp["ID"]," <br>";
    var_dump($emp);
    // echo var_dump($emp);

//3. MULTIDIMENSIONAL ARRAY : arrays within array

    $marks = array(

        "mohammad"=>array(
            "physics"=>35,
            "maths"=>39,
            "chemistry"=>51
        ),

        "prathmesh"=>array(
            "science"=>array("physics"=>35,"chemistry"=>51),
            "maths"=>39,
            "all"=>array(1,2,3)
        ),

        $AllStud=array(1,2,3)

    );

    $TABLE= array(
        array(2,4,6,8,10),
        array(3,6,9,12,15,18)
    );
    echo "<br><br>".$marks["ganesh"]["physics"]."<br>";
    echo $marks['prathmesh']["all"][2]."<br>";
    echo $TABLE[0][2]."<br>";
    echo "\$TABLE[0][2] = ".$TABLE[0][2];
    // echo var_dump($TABLE[0]);

?>