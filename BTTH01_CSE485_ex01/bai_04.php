<?php

$arrs = array("Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => 
"Brussels", "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" => 
"Paris", "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" => "Berlin", 
"Greece" => "Athens", "Ireland" => "Dublin", "Netherlands" => "Amsterdam", 
"Portugal" => "Lisbon", "Spain" => "Madrid", "Sweden" => "Stockholm", "United 
Kingdom" => "London", "Cyprus" => "Nicosia", "Lithuania" => "Vilnius", "Czech 
Republic" => "Prague", "Estonia" => "Tallin", "Hungary" => "Budapest", "Latvia" => 
"Riga", "Malta" => "Valetta", "Austria" => "Vienna", "Poland" => "Warsaw");

function returnText($array) {
    foreach ($array as $key => $item) {
        echo "Thủ đô của " . $key . " là " . $item . "<br>";
    }
}

returnText($arrs)

?>