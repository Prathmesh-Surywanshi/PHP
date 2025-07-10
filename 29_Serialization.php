<?php
    //1.serialize(value) : converts storable representation of value
    // convert value to bits

    //2.unserialize()

    $arr=array(
        'hello',
        43,
        array(1,2)
    );

    $str = serialize($arr);
    echo $str."<br>";

    $str = unserialize($str);
    print_r($str)
?>