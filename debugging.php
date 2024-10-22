<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $num1 = 5;
    $num2 = 0;
    try{
        $result = $num1/$num2;
        echo $result;
    }
    catch (Error $e){
        echo "Error: ". $e->getMessage();
    }
    ?>
</body>
</html>