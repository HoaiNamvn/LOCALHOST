<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>実習２</title>
</head>

<body>

    <style>
        body {
            font-family:
                "Hiragino Kaku Gothic Pro N",
                Meiryo,
                sans-serif;
        }

        table {
            border-collapse: collapse;
            border: 2px solid coral;
        }

        th,
        td {
            width: 50px;
            border: 1px dotted;

        }

        th {
            background: #99FF99;
        }

        td {
            text-align: center;
        }
    </style>

    <h2>実習２</h2>
    <table>
        <tr>
            <th>&nbsp;</th>
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
            <th>5</th>
            <th>6</th>
            <th>7</th>
            <th>8</th>
            <th>9</th>
        </tr>
        <?php
        for ($i = 1; $i <= 9; $i++) {

            echo '<tr>';
            echo '<th>' . $i . '</th>';

            for ($j = 1; $j <= 9; $j++) {
                echo '<td>' . $i * $j .'</td>';
            }
            echo '</tr>';
        }
        ?>
    </table>
</body>

</html>