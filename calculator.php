<?php

class Calculator {

public function add($number1, $number2){

    if(is_numeric($number1) && is_numeric($number2)) {
        return $number1 + $number2;
    } else{
        echo 'Both values should be numeric';
    }
}

public function subtract($number1, $number2){

    if(is_numeric($number1) && is_numeric($number2)) {
        return $number1 - $number2;
    } else{
        echo 'Both values should be numeric';
    }
}

public function multiply($number1,$number2){

    if(is_numeric($number1) && is_numeric($number2)) {
        return $number2 * $number1;
    } else{
        echo 'Both values should be numeric';
    }
}


public function divide($number1, $number2){

    if(is_numeric($number1) && is_numeric($number2)) {
        return $number1 / $number2;
    } else{
        echo 'Both values should be numeric';
    }
}


}

$calc = new Calculator();
echo $calc->add(8,2);
echo $calc->subtract(8,2);
echo $calc->multiply(8,2);
echo $calc->divide(8,2);


?>