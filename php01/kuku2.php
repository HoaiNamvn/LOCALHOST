<html>
<header>
    <title>Demo</title>
    <style>
        .red {
            color: red;
        }

        .bold {
            font-weight: bold;
        }
    </style>
</header>

<body>
    <?php
    $cols = $rows = 9;
    ?>
    <h1>Demo</h1>
    <table>
        <thead>
            <tr>
                <?php for ($col = 1; $col <= $cols; $col++) { ?>
                    <td><?= $col ?></td>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php for ($col = 1; $col <= $cols; $col++) { ?>
                <tr>
                    <?php for ($row = 1; $row <= $rows; $row++) {
                        $val = $row * $col;
                        $red = '';
                        $bold = '';
                        $expVal = str_split($val, 1);
                        // $valFirst = isset($expVal[0]) ? $expVal[0] : '';
                        // $valLast = isset($expVal[1]) ? $expVal[1] : '';
                        $className = '';
                        if (isset($expVal[0])) {
                            $num0 = $expVal[0];
                        } else {
                            $num0 = '';
                        }
                        if (isset($expVal[1])) {
                            $num1 = $expVal[1];
                        } else {
                            $num1 = '';
                        }

                        if ($num0 == 3 || $num1 == 3) {
                            $bold = "bol";
                        }

                        if ($val % 4 == 0) {
                            $red = " red";
                        }

                        $className = $bold . ' ' . $red;
                    ?>
                        <td class="<?= $className ?>"><?= $val ?></td>
                    <?php } ?>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>