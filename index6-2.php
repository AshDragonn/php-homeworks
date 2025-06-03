<?php

declare(strict_types=1);
$month = 1; // заданный месяц
$year = 2025; // заданный год
$month = (string) $month;
$year = (string) $year;

function formateMonth(string $month): string
{
    if (strlen($month) === 1) {
        return "0" . $month;
    } else {
        return $month;
    }
}
$month = formateMonth($month);

function calendar(string $year, string $month): void
{
    $flag = 1;
    $incomingDate = date_create($year . "-" . $month . "-01");
    echo "\033[30m" . $incomingDate->format("F") . "\033[0m";
    echo PHP_EOL;
    // крутимся внутри одного месяца
    while ($month === $incomingDate->format("m")) {
        $day = $incomingDate->format("N");

        if ($day === "6" || $day === "7") {
            echo $incomingDate->format('j');
            $flag = 1;
        } else {
            if ($flag === 1) { // рабочие дни - красные
                echo "\033[31m" . $incomingDate->format('j') . "\033[0m";
                $flag++;
            } else {
                echo $incomingDate->format('j');
                $flag = $flag === 2 ? 3 : 1;
            }
        }
        echo " ";
        $incomingDate->modify("+1 day");
    }
}
calendar($year, $month);
