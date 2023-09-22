<?php
    $array = array(1, 2, 3, 4, 5, 6, 7, 8);
    
    unset($array[3]);
    unset($array[6]);

    $lastKey = 0;
    foreach ($array as $key => $value) {
        if ($key != $lastKey) {
            $array[$lastKey] = $array[$key];
            unset($array[$key]);
        }
        $lastKey++;
    }

    foreach ($array as $key => $value) {
        echo "[" . $key . "] => [" . $value . "]<br>";
    }
?>