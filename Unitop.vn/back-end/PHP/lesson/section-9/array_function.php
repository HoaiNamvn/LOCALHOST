<?php
// $search = array('a' => 1, 'b => 2');
// if (array_key_exists('c', $search)) {
//     echo "a ton tai";
// } else {
//     echo "a khong ton tai";
// }

$array1 = array(1, 2, 3);
$array2 = array(4, 5, 6);
$array3 = array(7, 8, 9);
$result = array_merge($array1, $array2,$array3);
echo "<pre>";
print_r($result);
echo "</pre>";
