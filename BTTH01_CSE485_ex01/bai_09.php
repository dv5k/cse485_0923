<?php
    $arrs_1 = ['1', 'B', 'C', 'E'];
    $arrs_2 = ['a', 0, null, false];

    function convertString($array) {
        $temp_array = [];
        foreach ($array as $item) {
            if ($item === null){
                array_push($temp_array, 'null');
            }
            elseif ($item === false){
                array_push($temp_array, "false");
            }
            else{
                array_push($temp_array, strtolower((string)$item));
            }
        }
        print_r($temp_array);
    }

    convertString($arrs_1);
    echo "<br>";
    convertString($arrs_2);
?>