<?php
    $addresses = array("abc@example.com","spam@cyberpoint.com");
    foreach($addresses as $value){
        echo "Processing {$value}<br>";
        // echo "Processing {$value}\n";
    }

    //Associative Array:
    $person=array('name'=>"Prathmesh",'age'=>18,'class'>"TY");
    foreach($person as $key=>$value){
        echo "Friends {$key} is {$value}<br>";
    }
    foreach($person as $value){
        echo "$value<br>";
    }
?>