<!DOCTYPE html>
<html lang="en">
<head>
    <title>Validating Select List</title>
</head>
<body>

<fieldset>
    <legend> SELECT OPTIONS </legend>
    <form action="#" method="post">
        <br>
        <br>
        Select Options : 
        <select name="optgroup[]" size="3" multiple="multiple">
            <option selected>Option 1</option>
            <option>Option 2</option>
            <option>Option 3</option>
            <option>Option 4</option>
            <option>Option 5</option>
        </select>
        <br>
        <br>
        <input type="submit" value="SUBMIT"/>
        <br>
        <br>
    </form>
</fieldset>
</body>
</html>

<?php

    echo "IS ARRAY ? ".is_array($_POST['optgroup']);
    echo "<br><br>";
    // var_dump($_POST['optgroup']);
    print_r($_POST['optgroup']);
    echo "<br><br>";

    foreach($_POST['optgroup'] as $value){
        echo "$value <br>";
    }
?>