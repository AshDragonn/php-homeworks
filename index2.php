<?php
// $variable = 3.14;
// $variable = 3;
// $variable = 'one';
// $variable = true;
// $variable = null;
$variable = [];

$type = gettype($variable);
if (is_bool($variable)) {
    echo "type is $type";
} elseif (is_bool($variable) ) {
    echo "type is $type";
} elseif (is_float($variable) ) {
    echo "type is $type";
} elseif (is_int($variable)) {
    echo "type is $type";
} elseif (is_string($variable)) {
    echo "type is $type";
} elseif (is_null($variable)) {
    echo "type is $type";
} else  {
    echo "type is other";
}
echo "\n";


switch (true) {
    case is_bool($variable):
        $type2 = "boolean";
        break;
    case is_null($variable):
        $type2 = "NULL";
        break;
    case is_string($variable):
        $type2 = "string";
        break;
    case is_int($variable):
        $type2 = "integer";
        break;
    case is_float($variable):
        $type2 = "float";
        break;
    default:
        $type2 = "other";
}
echo "type is $type2";

// switch ($type) {
//     case "boolean":
//         echo "type10 is $type";
//         break;