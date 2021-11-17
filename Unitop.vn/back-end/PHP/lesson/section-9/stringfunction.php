<?php

$string = "doan     hoai      nam";
echo $string;
echo ucfirst($string); // in hoa chu cai dau
$stringed = trim(ucwords($string));// loai bo ki tu trang o dau va cuoi 
echo $stringed."<br>";


echo str_repeat("nam",5)."<br>";  // lap lai nam 5 lan


//ma hoa md5
echo md5("doanhoainam")."<br>";
# join tach tu mang thanh chuoi bo
# giong ham implode 

$list_id = array(1, 3, 4, 5, 7);
$nam = join(":",$list_id);
echo "ki tu lay ve ".$nam."<br>";

#explode
//tach tu string thanh cac ki tu rieng le hoac chuoi bo
$tring= "toi ten la doan hoai nam";
$conver = explode(" ",$tring);
echo $conver[3];
#htmlspecialchars
// doi du lieu khong xam hoai den he thong 

