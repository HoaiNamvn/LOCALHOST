<?php

$info = array(
    'id' => 1,
    'fullname' => 'doan hoai nam',
    'email' => 'doanhoainam098@gmail.com',
);

echo "<pre>";
print_r($info);
echo "</pre>";


$info['phone'] = '0008989787';
echo "<pre>";
print_r($info);
echo "</pre>";


$list_prime = array(2, 3, 5, 7);
$list_prime[] = 11;   
echo "<pre>";
print_r($list_prime);
echo "</pre>";

?>