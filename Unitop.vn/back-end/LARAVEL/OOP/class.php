<?php
class Rectangle{
    public $width = 20;
    public $height =30;

    public function getPerimeter(){
        return 2*($this->width + $this->height);
    }
    public function getArea(){
        return $this->width * $this->height;
    }
}
// tạo một đối tượng mới của lớp Retangle
$a = new Rectangle;
$a -> width = 5;
$a -> height =20;
echo $a -> getPerimeter();
echo "<br>";
echo $a -> getArea();
?>