<?php
// Make sure before on the SMTP and its port from php.ini file by just removing befores ';' semicolon
    $to = "prathmesh2@gmail.com";
    $sub = "HI";
    $msg = "Good, Evening!";
    $header = "From:prathmesh@gmail.com";

    $val = mail($to,$sub,$msg,$header);

    if($val){
        echo "SENT..........";
    }else{
        echo "FAIL..........";
    }
?>