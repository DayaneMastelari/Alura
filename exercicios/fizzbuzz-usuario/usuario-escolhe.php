<?php

$numero = $_POST["numero"];
$numeroFizz = $_POST["numeroFizz"];
$numeroBuzz = $_POST["numeroBuzz"];

for($i = 1; $i <= $numero; $i++){
    
    if($i % $numeroFizz == 0 && $i % $numeroBuzz == 0){
        echo "FizzBuzz <br>";
    }else if($i % $numeroFizz == 0){
        echo "Fizz <br>";
    }else if($i % $numeroBuzz == 0){
        echo "Buzz <br>";
    }else{
        echo $i . "<br>";
    } 
}

?>




