<?php

// tất cả những thuộc tính và method của A sẽ được B kế thừa
class A
{
    protected $attr_1 = 10; // protected 
    public function method_1()
    {
        echo "ok";
    }
}
class B extends A
{
    public $attr_2;
    public function method_2()
    {
        return $this -> attr_1;
    }
}
// tạo 1 đối tượng trên class B 
$b = new B();
$c = new B();
//$c -> attr_2 = " class B";
// gọi method1 của  đối tượng $b ,method 1 được kế thừa từ class A
echo  $c->method_2();
