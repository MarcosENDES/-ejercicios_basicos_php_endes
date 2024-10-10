<?php

$num1 = $_GET ['numero1'];
$num2 = $_GET ['numero2'];
$num3 = $_GET ['numero3'];

if ($num1 > $num2 && $num1 > $num3){
    echo "el número ". "$num1 es mayor";
} else if ($num2 > $num1 && $num2 > $num3){
    echo "el número ". "$num2 es mayor";
} else if ($num3 > $num1 && $num3 > $num2){
    echo "el número ". "$num3 es mayor";
}

?>