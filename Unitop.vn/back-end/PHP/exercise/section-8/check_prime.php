<?php

function check_prime($n)
{
    if ($n < 2) {
        return false;
    }

    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

function total_prime($n)
{
    $t = 0;
    for ($i = 2; $i <= $n; $i++) {
        if (check_prime($i))
            $t += $i;
        echo "$i,";
    }
    return $t;
}
echo total_prime(16);
