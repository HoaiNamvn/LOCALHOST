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
    <h1>   九九表</h1>
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
                        $pos = strpos($val, "3");
                        if( $pos !==false ){                        
                            $bold = "bold";
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