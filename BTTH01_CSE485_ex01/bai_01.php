<?php
    $arrs_1 = [2, 5, 6, 9, 2, 5, 6, 12, 5];

    function simpleNumberCalculator($array) {
        $operator = '';
        $text_results = '';
        $result = 0;
        for ($i = 0; $i < 4; $i++) {
            $text_results = '';
            $temp_arr = $array;
            if ($i == 0) {
                $operator = ' + ';
                $text_results .= 'Tổng các phần tử = ';
                
                foreach ($array as $item) {
                    $result += $item;
                }
            }
            elseif ($i == 1) {
                $operator = ' * ';
                $text_results .= 'Tích các phần tử = ';

                $result = 1;

                foreach ($array as $item) {
                    $result *= $item;
                }
            }
            elseif ($i == 2) {
                $operator = ' - ';
                $text_results .= 'Hiệu các phần tử = ';

                $result = $temp_arr[0];
                unset($temp_arr[0]);
                
                foreach ($temp_arr as $item) {
                    $result -= $item;
                }
            }
            elseif ($i == 3) {
                $operator = ' / ';
                $text_results .= 'Thương các phần tử = ';

                $result = $temp_arr[0];
                unset($temp_arr[0]);
                
                foreach ($temp_arr as $item) {
                    $result /= $item;
                }
            }
            
            for ($j = 0; $j < count($array); $j++) {
                if ($j == count($array) - 1) {
                    $text_results .= $array[$j] . ' ';
                }
                else {
                    $text_results .= $array[$j] . $operator . ' ';
                }
            }
            $text_results .= ' = ' . $result . "<br>";
            echo $text_results;
        }
    }

    simpleNumberCalculator($arrs_1);
?>