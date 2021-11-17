<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>課題3</title>
</head>

<body>
    <h1> 課題3 １から１００までの乱数で作成した２つの整数の四則演算</h1>

    <?php
    $d = ['+', '-', '*', '/'];

    for ($i = 1; $i <= 10; $i++) {
        $a = rand(1, 100);
        $b = rand(1, 100);
        $c = rand(0, 3);

        echo "ランダム数a : $a <br>";
        echo "ランダム数b : $b <br>";
        echo $a . ' ' . $d[$c] . ' ' . $b . ' = ';
        if ($c == 0) {        // 1 は +
            echo ($a + $b) . " <br>";
        }
        if ($c == 1) {        // 2 は -
            echo ($a - $b) . " <br>";
        }
        if ($c == 2) {       // 3 は * 
            echo ($a * $b) . "<br>";
        }
        if ($c == 3) {       // は /
            echo ($a / $b) . "<br>";
        }
        echo '--------------------';
        echo "<br>";
    }

    ?>
</body>

</html>