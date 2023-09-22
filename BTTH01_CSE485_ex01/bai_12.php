<?php
    $numbers = [
        'key1' => 12, 
        'key2' => 30,
        'key3' => 4,
        'key4' => -123,
        'key5' => 1234,
        'key6' => -12565,
    ];

    echo "Phần tử đầu tiên trong mảng: " . reset($numbers) . "<br>";
    echo "Phần tử cuối cùng trong mảng: " . end($numbers) . "<br>";
    echo "<br>";
    echo "Số lớn nhất trong mảng: " . max($numbers) . "<br>";
    echo "Số nhỏ nhất trong mảng: " . min($numbers) . "<br>";
    echo "<br>";
    echo "Sắp xếp mảng theo chiều tăng của giá trị:<br>";
    asort($numbers);
    print_r($numbers);
    echo "<br>";
    echo "<br>";
    echo "Sắp xếp mảng theo chiều giảm của giá trị:<br>";
    arsort($numbers);
    print_r($numbers);
    echo "<br>";
    echo "<br>";
    echo "Sắp xếp mảng theo chiều tăng của key:<br>";
    ksort($numbers);
    print_r($numbers);
    echo "<br>";
    echo "<br>";
    echo "Sắp xếp mảng theo chiều giảm của key:<br>";
    krsort($numbers);
    print_r($numbers);
?>