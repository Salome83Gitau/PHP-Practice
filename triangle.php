<?php
// this is an inverted triangle
for ($i=5;$i>=1;$i--){
    for($j=1;$j<=$i;$j++){
        echo "*";
    }
    echo "<br>";
}
echo "<br>";

$k=20;
$total =0;
while($k<=30 ){
    $total = $total +$k;
    echo $k;
    $k =$k +2;
    echo "<br>";
    
}
echo "The total of the even numbers is". $total;
echo "<br>";
$a=5;
while($a<=50){
    echo $a." ";
    $a +=5;
    
}
echo "<br>";

$l=900;
while($l>=200 ){
    if ($l %30==0){
        echo $l ." ";
    }

    $l--;

}
echo "<br>";
$m= 5;
do {
    echo $m. " ";
    $m+=5;
}while($m<=50);




?>