<?php

// #ham co 1 tham so
// function check_even($a)
// {
//     if ($a % 2 == 0) {
//         echo "{$a} la so chan ";
//     }else{
//         echo "{$a} la so le";
//     }
// }
// check_even(11);

// function show_array($data)
// {
//   if (is_array($data)) {
//     echo "<pre>";
//     print_r($data);
//     echo "</pre>";
//   }
// }


// function sum_multi()
// {
//   //  echo func_num_args();

//   $list_args = func_get_args();
//   $t = 0;
//   foreach ($list_args as $value) {
//     $t += $value;
//   }
//   // $a = func_get_arg(0);
//   // $b = func_get_arg(1);
//   show_array($list_args);
//   echo $t;
//   // echo "a = {$a} <br> b ={$b}";
// }
// sum_multi(2, 5, 6, 8, 9);

// function sum_multi_number($list_number = array())
// {
//   if (is_array($list_number)) {
//     $t = 0;
//     foreach ($list_number as $value) {
//       $t += $value;
//     }
//     echo $t;
//   }
// }
// $list_number = array(2, 4, 6);
// sum_multi_number($list_number);


function myFunction($arg_1, $arg_2, $option = array()) {


}
function create_input_text($name, $value, $option = array()) {
  $name = func_get_arg(0);
  $value = func_get_arg(1);
  $option =func_get_arg(2);
  if(!empty($option)){
    $id = $option['id'];
    $class = $option['class'];
  }
  $input_html = "<input type='text' name='{$name}' value='{$value}'id='{$id}' class='$class'/>";
  echo $input_html;
}
create_input_text('username','',$option =array('id'=> 'username','class'=>'form_input'));