<?php
//strtolower()
    $str = "My name is PRATHMESH.";
    $str=strtolower($str);

    echo $str."<br>";

// strtoupper()
    $str=strtoupper($str);
    echo $str."<br>";

//ucfirst()
    $str = "prathmesh";
    $str=ucfirst($str);
    echo $str."<br>";

//lcfirst()
    $str = "prathmesh";
    $str=lcfirst($str);
    echo $str."<br>";

//ucwords
    $str = "My name is PRATHMESH.";
    $str=ucwords($str);
    echo $str."<br>";
    
//strrev
    $str=strrev($str);
    echo $str."<br>";

//strlen
    $str = "prathmesh surywanshi";
    // $str=strlen($str);//returns len
    $len=strlen($str);//returns len
    echo $len."<br>";
    
//str_word_count
    // $str = "prathmesh surywanshi";
    $str=str_word_count($str);
    echo $str."<br>";

//strpos()
    $str=strpos($str,"surywanshi");
    echo $str,strpos($str,"s");
?>