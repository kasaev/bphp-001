<?php 

$variable = 3.14;
// $variable = 3;
// $variable = 'one';
// $variable = true;
// $variable = null;
// $variable = [];

//  Ваш программный код, в котором переменной $type
//  присваивается одно из значений: bool, float, 
//  int, string, null или other
// if (is_bool($variable) === true) {
//     $type = 'bool';
// } elseif (is_float($variable) === true) {
//     $type = 'float';
// } elseif (is_int($variable) === true) {
//     $type = 'int';
// } elseif (is_string($variable) === true) {
//     $type = 'string';
// } elseif (is_null($variable) === true) {
//     $type = 'null';
// } else {
//     $type = 'other';
// }


switch (true) {
    case is_bool($variable) : 
        $type = 'bool';
        break;
    case is_float($variable) : 
        $type = 'float';
        break;
    case is_int($variable) :
        $type = 'int';
        break;
    case is_string($variable) : 
        $type = 'string';
        break;
    case is_null($variable) :
        $type = 'null';
        break;
    default:
        $type = 'other';
        break;
    }

echo "type is $type" . PHP_EOL;


?>