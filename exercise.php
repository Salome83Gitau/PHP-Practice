<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// input handling
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_POST["input"];
    echo $input."<br>";
    $arr = str_split($input);
    print_r($arr)."<br>";

    $str = "c;v;my name";

    $value = preg_match($pattern, $str);
    if ($value == 1){
    echo "nice";


   
    
}

//class combine
$name ="Brooklyn boys";
$caps = ucwords($name);
$arr= str_replace(' ', '', $caps);
echo $arr."<br>";

// method combine
$car = "ford ranger";
$car2 = trim($car);
$car3 = ucwords($car2);
$car4= str_replace(' ', '', $car3);
echo lcfirst($car4)."()"."<br>";

// variable combine
$car = "ford mustang";
$car2 = trim($car);
$car3 = ucwords($car2);
$car4= str_replace(' ', '', $car3);
echo lcfirst($car4)."<br>";
// class separate
$name = "SalomeGitau";
$name2= lcfirst($name);
$arr = str_split($name2);
$num = preg_grep("/[A-Z]/", $arr);
echo "<br>";
print_r( $num);
echo "<br>";
foreach ($num as $x=>$y ){
    foreach($arr as $i=>$p){
       if ($i<$x){
        echo $p ;
    }
}
echo " ";
    }
    foreach ($num as $x=>$y ){
        foreach($arr as $i=>$p){
        if ($i>=$x){
            echo lcfirst($p);
        }
    }
        }

// method and variable separate
$name = "studentName";
$arr = str_split($name);
$num = preg_grep("/[A-Z]/", $arr);
echo "<br>";
print_r( $num);
echo "<br>";
foreach ($num as $x=>$y ){
    foreach($arr as $i=>$p){
       if ($i<$x){
        echo $p ;
    }
}
echo " ";
    }
    foreach ($num as $x=>$y ){
        foreach($arr as $i=>$p){
        if ($i>=$x){
            echo lcfirst($p);
        }
    }
        }
?>
</body>
</html>