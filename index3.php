<?php
echo "Введите два числа " . PHP_EOL;
fscanf(STDIN, "%d\n", $number1);
fscanf(STDIN, "%d\n", $number2);
if ($number2 === 0) {
fwrite(STDERR, "Делить на 0 нельзя" . PHP_EOL);
}
elseif (!is_int($number1) || !is_int($number2)){
fwrite(STDERR, "Введите, пожалуйста, число" . PHP_EOL);
}
else {
fwrite(STDOUT, "Result: " . ($number1 / $number2) . PHP_EOL);
}
?>