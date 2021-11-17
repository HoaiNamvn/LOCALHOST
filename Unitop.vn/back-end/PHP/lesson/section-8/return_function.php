<?php
# ham tra du lieu trong noi bo ham 
function show_array($data)
{
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}


function sum($a, $b){
    $t = $a + $b;
    return $t;
}
$t = sum(3, 5);
echo $t;