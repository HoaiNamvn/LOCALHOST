<?php
$a =11;
if($a %2==0){
    echo "$a is even number";
}
else{
    echo "$a is odd number";
}
// use func
function checkEven($n){
    if($n % 2 ==0){//true | false
return true;
    }
    return false;
}
$check = checkEven(6);