<?php
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
    ),
    3 => array(
        'id' => 3,
        'fullname' => 'doan hoai nam 3',
        'email' => 'doanhoainam098@gmail.com',
    )
);

echo "<pre>";
print_r($info);
echo "<pre>";
// them cach 1
$info[4] = array(
        'id' => 4,
        'fullname' => 'doan hoai nam 4',
        'email' => 'doanhoainam098@gmail.com',
);
echo "<pre>";
print_r($info);
echo "<pre>";

// them cach 2
$info[5]['id'] = '5';
$info[5]['fullname'] = 'hoainam 5';
$info[5]['email'] = 'donahoainam0098@gmail.com';

echo "<pre>";
print_r($info);
echo "<pre>";
$hoainam = $info[5];
print_r($hoainam);
echo $hoainam['id'];  ///echo $info[5]['id'];
?>

