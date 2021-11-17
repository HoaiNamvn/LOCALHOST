<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>random number</title>
</head>

<body>
    <h1>create random number </h1>
    <?php
    $val = rand(1, 100000);
    echo "random number is " . $val ." . ";
    $pos = strpos($val, "3");
    if($pos === false){
        echo "random number is not inclues 3 number ";        
    }else{
        echo "ramdom number is include 3 number and position is {$pos}";

    }

    ?>
</body>

</html>