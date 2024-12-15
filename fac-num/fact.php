<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial Number</title>
</head>
<body>
    <h3>Factorial Number</h3>
    <form action="#" method="post">
        Enter Number: <input type="number" name="num"><br><br>
        <input type="submit" name="btn">
    </form>
</body>
</html>

<?php
if($_POST){
    $num = $_POST['num'];
    $fact = 1;

    for($i=1; $i<=$num; $i++){
        $fact = $fact * $i;
    }
    echo "<h3>Factorial of $num is $fact</h3>";
}



?>