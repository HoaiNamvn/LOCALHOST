<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>矩形の面積の計算</title>
</head>

<body>
    <h3> 本システムは矩形の面積を計算する。 </h3>
    <h4>長辺と短辺を入力してください</h4>

   <!-- form　でデータをoutput.php file に送る -->
    <form action="output.php" method="POST">
        <input type="text" name="lenght" placeholder="長辺は："> <br>
        <input type="text" name="width" placeholder="短辺は："> <br>
        <input type="submit" value="送信">
    </form>
</body>

</html>