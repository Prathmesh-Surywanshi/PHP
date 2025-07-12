<?php
    class Student{
        function __call($name,$args){
            if($name=='area'&&count($args)==2){
                return $args[0]*$args[1];
            }
        }
    }
    $s = new Student();
    echo $s->area(20,20);
?>