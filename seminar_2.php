<?php

function calk($arg1, $arg2, $operation){
    switch($operation){
        case "+":
            return $arg1 + $arg2;
        case "-":
            return $arg1 - $arg2;
        case "*":
            return $arg1 * $arg2;
        case "/":
            return $arg1 / $arg2;
    }
}
$result = calk(6, 2, "/");
echo $result.PHP_EOL;

//=========================================================================================

$arr = ["Московcкая область" => [
    "Москва",
    "Зеленоград",
    "Клин"],
"Ленинградская область" => [
    "Санкт-Петербург",
    "Всеволожск",
    "Павловск",
    "Кронштадт"],
"Рязанская область" => [
    "Рязань",
    "Касимов",
    "Ряжск"]
];

foreach ($arr as $key => $value) {
    echo $key.': ';
    foreach ($value as $key => $value) {
    echo $value.' ';
    }
}
echo ' '.PHP_EOL;

//==============================================================================================================

$array = ['а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't'];


function transLiteral($text, $arr){
    for($n = 0; $n < strlen($text); $n ++){
        foreach($arr as $key1 => $value1){
            if ($text[$n] == $value1){
                echo $key1;
            }
        }
    }
}
transLiteral('stop', $array);

echo ' '.PHP_EOL;

//===========================================================================================================

function power($val,$pow){
    if($pow == 0)
        return 1;
    else
        return $val * power($val, $pow - 1);
}

echo power(3, 5);