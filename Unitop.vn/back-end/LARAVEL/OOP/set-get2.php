<?php
class Rectangle {
    private $width;
    public $height;

    public function setValue($width,$height){
        $this ->width = $width;
        $this -> height = $height;
    }
    public function getPerimeter(){
        return 2*($this -> width+$this -> height);
    }
    public function getArea(){
        return ($this -> width * $this -> height);
    }
}
$a = new Rectangle;
$a -> setValue(6,8);
echo $a ->getPerimeter();

?>