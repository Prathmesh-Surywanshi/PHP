<!DOCTYPE html>
<html lang="en">
<head>
    <title>Validating Select List</title>
</head>
<body>

<fieldset>
    <legend> SELECT BACKLOGS </legend>
    <form action="#" method="get">
        <br>
        <br>
        Select Backlogs : 
        <br>
        <input type="checkbox" name="check_list[]" value="AJP"/> AJP
        <br>
        <input type="checkbox" name="check_list[]" value="OSY"/> OSY
        <br>
        <input type="checkbox" name="check_list[]" value="EST"/> EST
        <br>
        <input type="checkbox" name="check_list[]" value="CSS"/> CSS

        <br>
        <br>
        <input type="submit" name="submit" value="SUBMIT"/>
        <br>
        <br>
    </form>
</fieldset>
</body>
</html>

<?php
    if(isset($_GET['submit'])){
        if(!empty($_GET['check_list'])){
            /* foreach($_GET['check_list'] as $selected){
                echo "$selected <br>";
            } */

            for ($x=0; $x<(count($_GET['check_list']));$x++){
                echo $_GET['check_list'][$x]."<br>";
            }
        }
    }
?>