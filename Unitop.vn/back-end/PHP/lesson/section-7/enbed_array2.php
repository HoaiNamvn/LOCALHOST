#b1 chuan bi mang du lieu
#b2 tạo cấu trúc html
#b3 duyệt mang
#b4 đổ dữ liệu html

<?php

$list_user = array(
    1000 => array(
        'id' => 1000,
        'fullname' => 'doan hoai nam 1',
        'email' => 'doanhoainam098@gmail.com',
    ),
    1268 => array(
        'id' => 1268,
        'fullname' => 'pham thi thuy linh',
        'email' => 'cobenoitam8@gmail.com',
    )
);
function show_Array($data){
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}

?>
<html>

<head>
    <title>nhung du lieu len html </title>
</head>

<body>
    <h1> Danh Sach Thanh Vien <h1>
    <?php     if(!empty($list_user)){ ?>

            <table border="1">
                <thead>
                    <tr>
                        <td width="100"> STT
                        </td>
                        <td width="100"> ID
                        </td>
                        <td width="120"> NAME
                        </td>
                        <td width="100"> EMAIL
                        </td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                 
                    $temp = 0;
                    foreach ($list_user as $user) {
                        show_Array($user);
                        $temp++;
                    ?>
                        <tr>
                            <td align="center"><?php echo $temp ;  ?></td>
                            <td align="center"><?php echo $user['id']; ?> </td>
                            <td><?php echo $user['fullname']; ?></td>
                            <td><?php echo $user['email']; ?></td>
                        </tr>
                    <?php
                    }
                
                    ?>
                </tbody>
            </table>
            <?php }else{
                 
            ?>
            <p> khong ton tai du lieu</p>
            <?php  
            }
            ?>
</body>

</html>