<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Largest Number</title>
</head>
<body>
    <h3>Largest Number</h3>
    <form action="#" method="post">
        Enter Number: <input type="number" name="num1"><br><br>
        Enter Number: <input type="number" name="num2"><br><br>
        Enter Number: <input type="number" name="num3"><br><br>
        <input type="submit" value="submit"><br>
    </form>
</body>
</html>
<?php
if($_POST){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];

    if($num1>$num2 && $num1>$num3){
        echo "<br>Largest Number is </br>".$num1;
    }else if($num2>$num1 && $num2>$num3){
        echo "<br>Largest Number is </br>".$num2;
    }else{
        echo "<br>Largest Number is </br>".$num3;
    }
}


?>