<?php
class Rectangle {
    // chuyen cac thuoc tinh ve kieu tinh 
    // dùng toán tử self:: không cần dấu $ ,thay vào đó thì trước thuộc tính ta thêm $ 
    public static $width;
    public static $height;
    public static function getPerimeter(){
        return 2 *(self::$width +self::$height);
    }
    public static function getArea(){
        return self::$width * self::$height;
    }
}
// có thể gọi trong 1 lơp mơi thông qua phương thức static
class Demo{
    function __construct(){
        Rectangle::$width = 10;
        Rectangle::$height = 15;
        echo Rectangle::getPerimeter();
    }
}
new Demo;


?>