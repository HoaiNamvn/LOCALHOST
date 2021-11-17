<?php
// giai phuong trinh bac hai Ax^2+Bx+C = 0
$a = 2;
$b = 7;
$c = -9;
if($a!=0){
    $delta = ($b*$b) - 4*$a*$c;
    if($delta > 0){
        echo "phuong trinh co hai nghiem : <br>";
        echo " nghiem 1 la:".(-$b + sqrt($delta))/(2*$a)."<br>";
        echo " nghiem 2 la:".(-$b - sqrt($delta))/(2*$a)."<br>";
    }elseif($delta == 0){
        echo "phuong trinh co mot nghiem duy nhat la : ". (-$b/(2*$a));
    }else{
        echo "phuong trinh vo nghiem  <br>";
    }
}else{
    echo "day khong phai la phuong trinh bac hai";
}


?>
