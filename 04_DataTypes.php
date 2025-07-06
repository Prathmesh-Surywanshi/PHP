<?php
//Try
    if(TRUE)
     echo "The condition is true";
    if(FALSE)
     echo "The condition is false";

     // INTEGER :
     $dec = 34;
     $oct = 0243;
     $hex = 0xe;
     echo "<br>Decimal Number : ".$dec;
     echo "<br>Octal Number : ".$oct;
     echo "<br>Hexadecimal Number : ".$hex;

     // FLOAT
     $num1 = 10.67;
     $num2 = 10.10;
     echo "<br>Addition is :".($num1+$num2);
     
     //ARRAY
     $bikes = array("YAMAHA","ROYAL ENFIELD","KTM");
     echo "<br>Array Element 2: $bikes[1]";
          
     // Object
     class bike{
        function model()
        {
            $model_name = "Splendor";
            echo "<br><br>Bike Model :".$model_name;
        }
     }
     $obj = new bike();
     $obj -> model();

     echo "<br>";
     echo "<br>";
     echo "<br>";
?>