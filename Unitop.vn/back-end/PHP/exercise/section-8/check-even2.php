<?php
function check_even($a)
{
    if ($a % 2 == 0) {
        return true;
    } else {
        return false;
    }
}
// goi ham

if (check_even(1121)) {
    echo "day la so nguyen chan";
} else {
    echo " day la so nguyen le ";
}
