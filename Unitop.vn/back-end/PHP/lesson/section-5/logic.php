<?php
// $x = 10;
$y = 3;
// if($x>5 || $y<6){
//     echo "ok";
// }
// if($x>15 || $y<1){
//     echo "ok";
// }
function check_even($x)
{
    if ($x % 2 == 0)
        return TRUE;
    return false;
}
if (!check_even(9)) {
    echo "ok this is no even number";
}
