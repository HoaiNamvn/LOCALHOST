<?php

$info = array(
        'id' => 1,
        'fullname' => 'doan hoai nam 1',
        'email' => 'doanhoainam098@gmail.com'
);
echo "<pre>";
print_r($info);
echo "<pre>";
# xoa phan tu mang mot chieu 
unset($info['email']);
print_r($info);
    ?>