<?php
// FOR CONSTANT NO $ dollar used

    //1.using define() function
    define("MESSAGE","Hello, Prathmesh!");
    // echo MeSSAGE; //ERROR default case sensitive
    echo MESSAGE;
    // define("MsG","<br>NO CASE SENSITIVE",true);
    // echo Msg;
    //Third parameter case-insesitive has been deprecated 

    //2. const keyword 
    const MSG="Hello const";
    echo "<br>".MSG;
    
    //constant("")
    
?>