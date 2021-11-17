<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>結果</title>
</head>
<body>
    <style>
    </style>
    <h3>あなたが入力した矩形の面積は以下になります。</h3>
    <?php

    //変数初期化
    $lenght = 0;
    $width = 0;

    //POST でユーザの入力データを受け取る
    $lenght = $_POST["lenght"];
    $width = $_POST["width"];

    //矩形の面積の計算
    echo "矩形の面積は：".$lenght." × ".$width."  = ";
    echo $lenght * $width ;

    ?>
</body>
</html>