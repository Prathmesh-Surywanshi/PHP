<?php
    //1.
    $n = "February";
    switch($n)
    {
        case "January" :
            echo "1";
            break;
        case "February" :
            echo "2";
            break;
        case "March" :
            echo "3";
            break;
        case "April" :
            echo "4";
            break;
        case "May" :
            echo "5";
            break;
        case "June" :
            echo "6";
            break;
        case "July" :
            echo "7";
            break;
        case "August" :
            echo "8";
            break;
        case "September" :
            echo "09";
            break;
        case "October" :
            echo "10";
            break;
        case "November":
            echo "11";
            break;
        case "December":
            echo "12";
            break;

        default:
            echo "INVALID..";
    }
?>

<?php
 echo "<br><br>";
 //2.
    
    $num = 3;
    switch($num)
    {
        case 1:
            echo "Monday";
            break;
        case 2:
            echo "Tuesday";
            break;
        case 3:
            echo "Wednesday";
            break;
        case 4:
            echo "Thursday";
            break;
        case 5:
            echo "Friday";
            break;
        case 6:
            echo "Saturday";
            break;
        case 7:
            echo "Sunday";
            break;
        default:
            echo "Invalid day";
    }
?>