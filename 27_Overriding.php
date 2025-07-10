<?php
    class aicte{
        function helloWorld(){
            echo "Parent"."<br>";
        }
    }
    class msbte extends aicte{
        function helloWorld(){
            echo "\nChild";
        }
    }

    $a = new aicte();
    $m = new msbte();
    $a->helloWorld();
    $m->helloWorld();
?>