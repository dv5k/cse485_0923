<?php
$numbers = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 
65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];

$avg = array_sum($numbers) / count($numbers);

echo "Giá trị trung bình của mảng: " . $avg . "<br><br>";

$larger = [];
$smaller_equal = [];

foreach ($numbers as $number) {
    if ($number > $avg) {
        array_push($larger, $number);
    }
    else {
        array_push($smaller_equal, $number);
    }
}
echo "Các số có giá trị lớn hơn giá trị trung bình: ";
echo "<br>";
print_r($larger);
echo "<br>";
echo "Các số có giá trị nhỏ hơn hoặc bằng giá trị trung bình: ";
echo "<br>";
print_r($smaller_equal);
echo "<br>";
?>