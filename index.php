<?php
// for($i = 0; $i<=10; $i++)
// {
//     echo "The output is ".($i**2)."<br>";
// }



// // odd numbers between 20-100
// for($j = 20; $j< 100; $j++){
//     if($j%2==1){
//         echo "The odd numbers are ".$j."<br>";
//     }
// }

//$numbers = $_POST['number'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    for($numbers=$_POST['loop1']; $numbers<=$_POST['loop2']; $numbers++){
        echo $numbers."<br>";
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    for($numbers=$_POST['loop1']; $numbers<=$_POST['loop2']; $numbers++){
        echo $numbers."<br>";
    }
}


?>

