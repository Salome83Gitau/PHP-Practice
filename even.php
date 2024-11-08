<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    //echo "The following numbers are divisible by 10 <br>";
// for ($i=790; $i>=590;$i--){
//     if ($i%10==0){
//         echo $i . "<br>";
//     }
// }
echo "The following numbers are divisible by 25". "<br>";
$sum =0;
for($i=1; $i<=900; $i++){
    if($i%25==0){
        echo $i ."<br>";
       $sum+=$i;
    }
    
}
 echo "The sum is ". $sum;


?> 
</body>
</html>