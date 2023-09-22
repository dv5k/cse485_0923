<?php
    $arrs_1 = ['1', 'b', 'c', 'd'];
    $arrs_2 = ['a', 0, null, false];

    function convertString($array) {
        $temp_array = [];
        foreach ($array as $item) {
            if ($item === null){
                array_push($temp_array, 'NULL');
            }
            elseif ($item === false){
                array_push($temp_array, "FALSE");
            }
            else{
                array_push($temp_array, strtoupper((string)$item));
            }
        }
        print_r($temp_array);
    }

    convertString($arrs_1);
    echo "<br>";
    convertString($arrs_2);
?>