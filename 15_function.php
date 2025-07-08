<?php

    //Defining a function:
    function writeMessage(){
        // echo "You're a good person!<br>";
        echo "You're a good person!";
    }

    //addition
    function add($num1,$num2){ //parameterized
        $sum = $num1+$num2;
        // echo $num1+$num2;
        echo "Addition is :".$sum;
    }

    writeMessage();
    echo "<br>";
    add(20,10);

    function sub($num1,$num2){ 
        $sub = $num1-$num2;

        return $sub;
    }
    function division($num1,$num2){ 
        $div = $num1/$num2;

        return $div;
    }
    function multiply($num1,$num2){ 
        $mul = $num1*$num2;

        return $mul;
    }

    $sub = sub(15,7);
    echo "<br>15-7 = {$sub}";
    echo "<br>14/7 = ".division(14,7);
    echo "<br>14x10 = ".multiply(14,10);
?>