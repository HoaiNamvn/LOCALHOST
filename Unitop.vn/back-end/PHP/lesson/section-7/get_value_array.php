


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$info = array(
    'id' => 1,
    'fullname' => 'doan hoai nam',
    'email' => 'doanhoainam098@gmail.com',
);

$id = $info['id'];
$fullname = $info['fullname'];
$email = $info['email']; 
?>
<p> <strong>  <?php  echo $id  ?>   </strong> </p>
<p> <strong>  <?php  echo $fullname  ?>   </strong> </p>
<p> <strong>  <?php  echo $email  ?>   </strong> </p>



</body>
</html>

