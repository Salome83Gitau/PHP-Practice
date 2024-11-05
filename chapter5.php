<?php
$name = "Sal";
$marks = 75;
$height = 5.5;
$PI = 3.14;
$malls = array ('Westgate', 'Sarit', 'two rivers', 'Garden city');
$female = true;


echo $name ." is a string ". is_string($name)."<br>";
echo $marks ." is a integer ". is_int($marks)."<br>";
echo $height ." is a float ". is_float($height)."<br>";
echo $PI ." is a double ". is_double($PI) ."<br>";
echo "malls" ." is an array ". is_array($malls). "<br>";
echo $female ." is a boolean ". is_bool($female)."<br>";
echo "<br>";

$maryAge= 16;
$salAge=20;

echo "Mary and Sal are agemates: " . ($maryAge == $salAge ? 'true' : 'false') . "<br>";
echo "Mary is younger than Sal: " . ($maryAge < $salAge ? 'true' : 'false') . "<br>";
echo "Mary is older than Sal: " . ($maryAge > $salAge ? 'true' : 'false') . "<br>";
echo "Mary is the same age or younger than Sal: " . ($maryAge <= $salAge ? 'true' : 'false') . "<br>";
echo "Mary is the same age or older than Sal: " . ($maryAge >= $salAge ? 'true' : 'false') . "<br>";

?>