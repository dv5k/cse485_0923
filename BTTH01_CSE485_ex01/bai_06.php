<?php
$keys = array(
    "field1"=>"first",
    "field2"=>"second",
    "field3"=>"third"
   );
$values = array(
    "field1value"=>"dinosaur",
    "field2value"=>"pig",
    "field3value"=>"platypus"
);
$new_arr = [];
for ($i = 1; $i < 4; $i++) {
    $new_arr[$keys["field" . $i]] = $values["field" . $i . "value"];    
}

foreach ($new_arr as $key => $value) {
    echo $key . " => " . $value . "<br>";
}
?>
