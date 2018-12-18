<?php

function fizzbuzz($numero, $output) {
    if ($numero > 100) {
        return $output;
    }
    
    if ($numero % 3 == 0 && $numero % 5 == 0) {
        echo "fizzbuzz<br>";
    } else if ($numero % 3 == 0) {
        echo "fizz <br>";
    } else if ($numero % 5 == 0) {
        echo "buzz <br>";
    } else {
        echo "$numero <br>";
    }   
    return fizzbuzz($numero + 1, $output);
}

echo fizzbuzz(1, "");

?>