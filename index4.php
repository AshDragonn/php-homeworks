<?php
ini_set('default_charset', 'CP1251');
mb_internal_encoding('UTF-8');
mb_http_output('CP1251');
ob_start("mb_output_handler");
echo "Фамилия: ";
// echo mb_convert_encoding("Фамилия: ", "CP1251","UTF-8");
$surName = mb_convert_case(mb_convert_encoding(trim(fgets(STDIN)), "UTF-8", "CP1251"), MB_CASE_TITLE);
echo 'Имя: ';
// echo mb_convert_encoding("Имя: ", "CP1251","UTF-8");
$firstName = mb_convert_case(mb_convert_encoding(trim(fgets(STDIN)), "UTF-8", "CP1251"), MB_CASE_TITLE);
echo 'Отчество: ';
// echo mb_convert_encoding("Отчество: ", "CP1251","UTF-8");
$lastName = mb_convert_case(mb_convert_encoding(trim(fgets(STDIN)), "UTF-8", "CP1251"), MB_CASE_TITLE);
echo PHP_EOL;
$fullName = "$surName" . ' ' . "$firstName" . ' ' . "$lastName";
$fio = mb_substr("$surName", 0, 1) . mb_substr("$firstName", 0, 1) . mb_substr("$lastName", 0, 1);
$surNameAndInitials = "$surName" . ' ' . mb_substr("$firstName", 0, 1)  . '.' . mb_substr("$lastName", 0, 1);


echo "Полное имя: " . $fullName . PHP_EOL;
echo "Фамилия и инициалы: " . $surNameAndInitials . PHP_EOL;
echo "Аббревиатура: " . $fio . PHP_EOL;
// echo mb_convert_encoding("Полное имя: ", "CP1251","UTF-8") . $fullName . PHP_EOL;
// echo mb_convert_encoding("Фамилия и инициалы: ", "CP1251","UTF-8") . $surNameAndInitials . PHP_EOL;
// echo mb_convert_encoding("Аббревиатура: ", "CP1251","UTF-8") . $fio . PHP_EOL;