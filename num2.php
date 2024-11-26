<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number1=$_POST['num1'];
    $number2=$_POST['num2'];
    $avg=($number1+$number2)/2;
    $sum=($number1+$number2);
    
    echo "The first number is ".$number1."<br>";
    echo "The second number is ".$number2."<br>";
    echo "The average of the numbers is ".$avg."<br>";
    echo "The sum of the numbers is ".$sum."<br>";

    }

?>