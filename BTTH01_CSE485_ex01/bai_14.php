<?php
$array1 = [
    [77, 87],
    [23, 45]
    ];
$array2 = [
    'giá trị 1', 
    'giá trị 2'
    ];

$new_arr = [];

for ($i = 0; $i < count($array1); $i++) {
    $temp = $array1[$i];
    array_push($temp, $array2[$i]);
    $new_arr[$i] = $temp;
}
print_r($new_arr);
?>