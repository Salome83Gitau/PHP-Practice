<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number1=$_POST['num1'];
    $number2=$_POST['num2'];
    $avg=($number1+$number2)/2;
    $sum=($number1+$number2);
    $mod=($number1%$number2);
    
    echo "The first number is ".$number1."<br>";
    echo "The second number is ".$number2."<br>";
    echo "The average of the numbers is ".$avg."<br>";
    echo "The sum of the numbers is ".$sum."<br>";
    echo "The modulus of the numbers is ".$mod."<br>";
    }

?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="num1">Number 1</label>
        <input type="text" name="num1" id="num1"> <br> <br>
        <label for="num2">Number 2</label>
        <input type="text" name="num2" id="num2"> <br> <br>
        <input type="submit" value="calculator">

    </form>
</body>

</html>