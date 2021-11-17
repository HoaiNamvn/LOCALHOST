<?php
$list_post_cat = array(
    1 => array(
        'cat_id' =>1,
        'cat_title' =>'xa hoi'
    ),
    2 => array(
        'cat_id' =>2,
        'cat_title' =>'the thao'
    )
    );

    $list_post = array(
1 => array(
    'id' => 1,
    'post_title' =>'bai viet 1',
    'post_content' => 'chi tiet bai viet 1',
    'post_desc' => 'mo ta bai viet 1',
    'cat_id' => 1
),
2 => array(
    'id' => 2,
    'post_title' =>'bai viet 2',
    'post_content' => 'chi tiet bai viet 2',
    'post_desc' => 'mo ta bai viet 2',
    'cat_id' => 2
),

);
echo "<pre>";
print_r($list_post_cat);
echo "</pre>";
echo "<pre>";
print_r($list_post);
echo "</pre>";
