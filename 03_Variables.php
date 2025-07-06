<?php
//DATATYPES =
    // 1.String ('' or "")

    $class = 'V2V';
    echo "Best Classes for diploma is ".$class."<br>";

    //2.Array :

    $cars = array("Volvo","BMW","Toyota");
    echo "$cars[0]"."<br>";
    var_dump($cars);
    echo "<br><br>";
    
    //var_dump()
    $x=5;
    var_dump($x);
    echo "<br>";
    var_dump($class);//class is keyword but i using $ infront not gives error
    echo "<br>";

    //change dynamic data type
    $x = 5;
    var_dump($x);
    echo "<br>";
    $x = "HELLO";
    var_dump($x);
    echo "<br>";
    $x="50";

    //type casting
    $x = (int) $x;
    var_dump($x);
    echo "<br>";
?>
<?php 
$x = 5; // global scope
 
function myTest() {
  // using x inside this function will generate an error so used global keyword
  global $x;
  echo "<p>Variable x inside function is: $x</p>";
} 
myTest();

echo "<p>Variable x outside function is: $x</p>";
?>

<?php
    // variables are the containers for storing the information .
    // variables starts with the '$'
    // variables (name) are case-sensitive

    $name = "Prathmesh";
    $salary = 30000;
    $NaMe = "_____";
    
    echo "Name is : $name and his salary is : Rs.$salary <br>";
    echo "$name is a good guy <br><br>";
    echo "$NaMe is a bad guy.";

    echo "$NAME variable not present.";

?>

