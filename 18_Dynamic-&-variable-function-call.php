<?php
    //dynamic function call : assign string value as function name and treat that variable exactly as function itself.
    function sayHello(){
        echo "Hello<br>";
    }

    $function_holder = "sayHello";
    $function_holder();


    //variable function same like dynamic function :
    function bar(){
        echo "bar function executed.";
    }
    $foo = 'bar';
    $foo();

    // $arr = array(1,2);
    // $array_hold = "arr"
?>