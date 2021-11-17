<?php

$list_post = array(
    1 => array(
        'id' => 1,
        'post_title' => "co dong vien phap ",
        'post_content' => "chi tiet bai viet 1",
        'post_desc' => "dan tri",
        'cat_id' => 1
    ),
    2 => array(
        'id' => 2,
        'post_title' => " co dong vien phap2 ",
        'post_content' => "chi tiet bai viet 2",
        'post_desc' => "dan tri2",
        'cat_id' => 2
    )
);

function get_post_by_id($id)
{
    global $list_post;
    foreach ($list_post as $key => $value) {
        if ($key == $id)
            return $list_post[$id];
    }
    return false;
}
$item = get_post_by_id(2);
echo "<pre>";
print_r($item);
echo "</pre>";
