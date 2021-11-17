<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $nam = array(123, "hoai nam", 6.75);
    echo "$nam[1] <br>";
    $i = 5;
    echo "$nam[2] <br>";
    echo count($nam);
    $nam[] = "tokyo";
    echo count($nam);
    ?>
</body>

</html>