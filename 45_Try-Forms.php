<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="form1" action="#" method="get"><input type="submit" name="S1" value="S1"/></form> <br>
    <form name="form2" action="#" method="get"><input type="submit" name="S2" value="S2"/></form><br>
    <form name="form3" action="#" method="get"><input type="submit" name="S3" value="S3"/></form><br>
    <form name="form4" action="#" method="get"><input type="submit" name="S4" value="S4"/></form><br><br>
</body>
</html>

<?php
    if(isset($_GET['S1'])){
        echo "Form 1 Submitted .";
    }
    if(isset($_GET['S2'])){
        echo "Form 2 Submitted .";
    }
    if(isset($_GET['S3'])){
        echo "Form 3 Submitted .";
    }
    if(isset($_GET['S4'])){
        echo "Form 4 Submitted .";
    }
?>