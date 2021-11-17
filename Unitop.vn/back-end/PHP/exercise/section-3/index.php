<?php 
/* CHECK-LIST
*b1:xây dựng giao diện
*b2:tạo biến và gán giá trị 
*b3:đổ dữ liệu
*/
$full_name="Phan Văn Cương";
$user_name="unitop";
$email="phanvancuong.qt@gmail.com";
?>
<html>
<head><title> Bài tập 1 </title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Thông tin cá nhân  </h1>
    <form action="">
    <label for="fullname">Họ tên đầy đủ </label> <br>
    <input type="text" id="fullname" name="fullname" placeholder="<?php echo $full_name ;?>"> <br> 
    <label for="username">Tên người dùng </label> <br>
    <input type="text" id="username" name="username" placeholder="<?php echo $user_name ;?>">  <br>
    <label for="email">Mail </label> <br>
    <input type="email" id="email" name="email"placeholder="<?php echo $email ;?>"> 
    </form>
</body>
</html>