<?php
// $variable = 3.14;
// $variable = 3;
// $variable = 'one';
// $variable = true;
$variable = null;
// $variable = [];

$type = gettype($variable);
if (is_bool($variable)) {
echo "type is $type";
}
elseif (is_bool($variable) ) {
echo "type is $type";
}
elseif (is_float($variable) ) {
echo "type is $type";
}
elseif (is_int($variable)) {
echo "type is $type";
}
elseif (is_string($variable)) {
echo "type is $type";
}
elseif (is_null($variable)) {
echo "type is $type";
}
else  {
echo "other";
}
echo "\n";
switch (true) {
    case 0:
        $type === "boolean";
        echo "type0 is $type";
        break;
    case 1:
        $type === "NULL";
        echo "type1 is $type";
        break;
    case 2:
        $type === "string";
        echo "type2 is $type";
        break;
    case 3:
        $type === "integer";
        echo "type3 is $type";
        break;
    case 4:
        $type === "double";
        echo "type4 is $type";
        break;
    default:
        echo "5other";
}

