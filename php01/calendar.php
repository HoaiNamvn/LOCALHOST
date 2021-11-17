<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>課題４</title>
</head>

<body>
    <h2>課題４</h2>
    <p>
        <?php
        $year = date("Y"); // 現在の年を取得
        $month = date("n"); // 現在の月を取得
        // 現在月の始めの日の曜日を整数で取得（0:日曜・・・6:土曜）
        $first_dweek = date("w", mktime(0, 0, 0, $month, 1, $year));
        $ndays = date("t"); // 現在の月の日数を取得
        echo "<table border='1'><tr>";
        echo "<tr><td colspan='7'>" . $year . "年" . $month . "月</td></tr>";
        echo "<td>日</td><td>月</td><td>火</td><td>水</td><td>木</td><td>金</td><td>土</td></tr><tr>";
        // 最初の週の処理（始めの日の曜日まで空白セルにする）
        for ($i = 0; $i < $first_dweek; $i++) {
            echo "<td> </td>";
        }
        $current_dweek = $i; // 表示する日にちの曜日（整数．0:日曜・・・6:土曜）
        $day = 1; // 表示する日にちの初期化
        while ($day <= $ndays) { // 日にち表示の繰り返し
            if ($current_dweek > 6) { // 土曜を超えたら改行
                echo "</tr>\n";
                echo "<tr>";
                $current_dweek = 0;
            }
            echo "<td>" . $day . "</td>"; // 日にちを表示
            $day++;
            $current_dweek++;
        }
        echo "</tr></table>";
        ?>
    </p>
</body>

</html>