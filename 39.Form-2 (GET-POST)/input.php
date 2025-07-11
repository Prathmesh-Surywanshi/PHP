<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form-1</title>
</head>
<body>
    <form action="#" method="GET">
    <!-- <form action="hello.php" method="post"> -->
        <input type="checkbox" name="check" value="Male" />Male <br>
        <input type="checkbox" name="check" value="Female" />Female <br>
        <input type="submit">
    </form>
<?php

    if(isset($_GET['check'])){
        echo $_GET['check'];
        // echo $_GET['check'][0];
    }

?>
</body>
</html>

