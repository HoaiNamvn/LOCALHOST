<?php
class Demo{
    public $attr_1;//truy xuat o dau cung duuoc
    private $attr_2; //ra ngoai la die
    protected $attr_3 = 40 ;
    public function show(){
        return $this -> attr_1; 
    }
}
class User extends Demo{
     function __construct(){
       echo $this -> attr_3;
     }
}
// goi lop User
new User;
// $u = new Demo;
// $u -> attr_3 = 20;
// echo $u -> attr_3;

?>