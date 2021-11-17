<?php

$list_prime = array(2, 3, 5, 7);

#b1 chuan bi mang du lieu 
#b2 tạo cấu trúc html 
#b3 duyệt mang
#b4 đổ dữ liệu html

?>
<html>

<head>
    <title>nhung du lieu len html </title>
</head>

<body>
    <h1> danh sach so nguyen to <h1>

            <table border="1">
                <thead>
                    <tr>
                        <td width="40"> STT
                        </td>
                        <td width="400"> SO NGUYEN TO
                        </td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $temp = 0;
                    foreach ($list_prime as $item) {
                        $temp++;
                    ?>
                        <tr>
                            <td align="center"><?php echo $temp;   ?></td>
                            <td align="center"><?php echo "$item";  ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
</body>

</html>