<?php
echo "Фамилия: ";

$surName = mb_convert_case(trim(fgets(STDIN)), MB_CASE_TITLE);
echo 'Имя: ';

$firstName = mb_convert_case(trim(fgets(STDIN)), MB_CASE_TITLE);
echo 'Отчество: ';

$lastName = mb_convert_case(trim(fgets(STDIN)), MB_CASE_TITLE);
echo PHP_EOL;
$fullName = "$surName" . ' ' . "$firstName" . ' ' . "$lastName";
$fio = mb_substr("$surName", 0, 1) . mb_substr("$firstName", 0, 1) . mb_substr("$lastName", 0, 1);
$surNameAndInitials = "$surName" . ' ' . mb_substr("$firstName", 0, 1)  . '.' . mb_substr("$lastName", 0, 1);


echo "Полное имя: " . $fullName . PHP_EOL;
echo "Фамилия и инициалы: " . $surNameAndInitials . PHP_EOL;
echo "Аббревиатура: " . $fio . PHP_EOL;
