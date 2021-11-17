<?php

class Demo{
    private $attr_1;
    public function setValue($value) {
        $this ->attr_1 = $value;
    }
    public function getValue() {
        return $this -> attr_1;
    }
}
$a = new Demo();
$a ->setValue(20); // Dùng phương thức setvalue để cập nhật giá trị biến 
echo $a -> getValue();

?>