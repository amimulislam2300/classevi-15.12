<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number</title>
    
</head>
<body>
    <h2>Prime Number</h2>
    <form action="#" method="post">
        Enter number:
        <input type="number" name="num"><br><br>
        <input type="submit" name="btnsubmit" value="Check">
    </form>
</body>
</html>

<?php
if($_POST){
    $num = $_POST['num'];
    $count = 0;
    if($num<=1){
        echo "$num is a conseption number";
    }else{
        for($i=2;$i< $num;$i++){
            if($num % $i==0){
                $count++;
                break;
            }
        }
    }
    if($count==0){
        echo "<br><h3>$num is a prime number</h3><br>";
    }else{
        echo "<h3>$num is a prime number</h3>";
    }
}
?>