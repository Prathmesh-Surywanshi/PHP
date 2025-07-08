<?php
 //Passing arguements by reference. : we can update global variable value through function

    function addFive($num){
        $num+=5;
        echo "Value = $num <br>";
    }
    function addSix(&$num){ // using & change original passed variable value
        $num+=6;
        echo "Reference var = $num <br>";
    }
    $orignum = 10;
    echo "Value Before = $orignum <br>";

    addFive($orignum);
    addSix($orignum);

    echo "Value After = $orignum";

?>