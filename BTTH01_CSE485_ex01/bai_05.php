<?php
$a = [
    'a' => [
        'b' => 0,
        'c' => 1
    ],
    'b' => [
        'e' => 2,
        'o' => ['b' => 3]
    ]
];

echo $a['b']['o']['b'] . "<br>";
echo $a['a']['c'] . "<br>";
foreach ($a['a'] as $key => $value){
    echo $key . " => " . $value . "<br>";
}
?>
