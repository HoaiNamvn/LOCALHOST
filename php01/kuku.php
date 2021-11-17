<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>実習２</title>
</head>

<body>
    <h2>実習２</h2>
    <table border='3'>
        <caption>九九表</caption>
        <?php
        echo "<tr style='background-color:#99FF99'>";
        echo "<td></td>";
        for ($i = 1; $i <= 9; $i++) {
            echo "<td>" . $i . "</td>";
        }
        echo "<tr>";
        for ($i = 1; $i <= 9; $i++) {
            echo "<tr><td style='background-color:#99FF99'>" . $i . "</td>";
            for ($j = 1; $j <= 9; $j++) {
                $atai = $i * $j;               
               
                    echo "<td style='color:red'>" . $atai . "</td>";
                }
                
            
            echo "</tr>";
        }

        ?>
    </table>
</body>

</html>