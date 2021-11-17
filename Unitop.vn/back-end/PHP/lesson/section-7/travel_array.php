<?php 
// # duyêt mảng một chiều 

// $list_prime = array(2, 3, 5 ,7);

// $t = 0;
// foreach ($list_prime as $key => $item) {
// echo "{$key} => ($item}. <br>";
// $t += $item;
// }
// echo "Tong :($t)";

# duyet mang da chieu


$info = array(
    1 => array(
        'id' => 1,
        'fullname' => 'doan hoai nam 1',
        'email' => 'doanhoainam098@gmail.com',
    ),
    2 => array(
        'id' => 2,
        'fullname' => 'doan hoai nam 2',
        'email' => 'doanhoainam098@gmail.com',
    )
    );
 echo "<pre>";
 print_r($info);
 echo "</pre>";

 foreach ($info as $item){
     echo $item['id'] . "<br>";
     echo $item ['fullname'] . "<br>";
     echo $item['email']."<br>";
     echo "---------------------------------";
 }


?>