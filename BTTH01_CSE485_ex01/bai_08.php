<?php
    $array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];

    $max_length = 0;
    $min_length = 50;

    $max_item = '';
    $min_item = '';
    foreach ($array as $item) {
        if (strlen($item) > $max_length){
            $max_item = $item;
            $max_length = strlen($item);
        }
        elseif (strlen($item) < $min_length) {
            $min_item = $item;
            $min_length = strlen($item);
        }
    }

    echo "Chuỗi lớn nhất là " . $max_item . ", độ dài = ". $max_length ."<br>";
    echo "Chuỗi nhỏ nhất là " . $min_item . ", độ dài = ". $min_length;
?>