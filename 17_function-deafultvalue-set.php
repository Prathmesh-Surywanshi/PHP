<?php
    function printMe($param = NULL){
        print $param;
    }
    function printW($param = NULL){
        return $param;
    }

    function printNUM($param = 11){
        print $param;
    }

    function printNums(&$num1, $num2=5){
        return $num1+=$num2;
    }
    function add($num1=10, $num2=5){
        return $num1+=$num2;
    }

    printMe("This is test.");
    printMe();
    echo printW();
    echo "<br>";
    printNUM();
    echo "<br>";
    // echo printNums($num,20);

    $num=10;
    echo printNums($num,20)."<br>";
    echo printNums($num),"<br>";
    echo add(20);
?>