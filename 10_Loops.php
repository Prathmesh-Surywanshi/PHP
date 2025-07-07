<?php
    // 1.for
    for($i = 0;$i<5;$i++){
        echo $i."<br>";
    }
    echo "<br><br><br>";

    $a=0;$b=0;
    for($i=1;$i<=5;$i++){
        $a+=10;
        $b+=5;
    }
    echo "After the loop a=$a, b=$b";
    echo "<br><br><br>";

    for($i=1;$i<=10;$i++)
    {
        echo "5 x $i = ".(5*$i),"<br>";
    }
    echo "<br><br><br>";

    // 2.While :
    $i=0;
    while($i<10){
        $i++;
        echo $i;
    }
    echo "<br><br><br>";

    $j=1;
    while($j<=10){
        echo ($j*10)."<br>";
        $j++;
    }
    echo "<br><br><br>";

    //3. do-while :
        $num1 = 5;
        do{
            echo $num1."<br>";
        }
        while($num1>10);
        echo "<br><br><br>";

    //4. foreach :
        $array = array(1,2,3,4,5);
        foreach($array as $value)
        {
            echo "value : $value.<br>";
        }
        echo "<br><br><br>";

        $bikes = array("Splendor","Yamaha","Royal Enfield");
        foreach($bikes as $bike)
        {
            echo "Bike : ".$bike."<br>";
        }
?>