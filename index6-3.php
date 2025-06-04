<?php

declare(strict_types=1);
$year = 2025; // текущий год
echo "Введите номер текущего месяца: ";
fscanf(STDIN, "%d\n", $month);
echo "Введите количество месяцев для отображения: ";
fscanf(STDIN, "%d\n", $monthCount);

function calendar(int $year, int $month, int $monthCount): void
{
    $flagDay = 1;
    $flagMonth = 1;
    $incomingDate = date_create($year . "-" . $month . "-01");
    echo $incomingDate->format('Y') . "\n";
    // крутимся внутри одного месяца
    while ($month == $incomingDate->format("n")) {

        $day = $incomingDate->format("N");
        $dayD = $incomingDate->format('d');
        if ($incomingDate->format('j') == 1) {
            echo PHP_EOL;
            echo "\033[30m" . $incomingDate->format("F") . "\033[0m" . PHP_EOL;
            echo 'Пн' . ' ' . 'Вт' . ' ' . 'Ср' . ' ' . 'Чт' . ' ' . 'Пт' . ' ' . 'Сб' . ' ' . 'Вс' . PHP_EOL;
            echo PHP_EOL;
        }
        if ($incomingDate->format('j') == 1 && $day === "2") {
            echo "   ";
        } elseif ($incomingDate->format('j') == 1 && $day === "3") {
            echo "   " . "   ";
        } elseif ($incomingDate->format('j') == 1 && $day === "4") {
            echo "   " . "   " . "   ";
        } elseif ($incomingDate->format('j') == 1 && $day === "5") {
            echo "   " . "   " . "   " . "   ";
        } elseif ($incomingDate->format('j') == 1 && $day === "6") {
            echo "   " . "   " . "   " . "   " . "   ";
        } elseif ($incomingDate->format('j') == 1 && $day === "7") {
            echo "   " . "   " . "   " . "   " . "   " . "   ";
        }

        if ($day === "6" || $day === "7") { // выходные дни - зеленые
            $flagDay = 1;
            $dayD = "\033[32m" . $incomingDate->format('d') . "\033[0m";
        } else {
            if ($flagDay === 1) { // рабочие дни - красные
                $dayD = "\033[31m" . $incomingDate->format('d') . "\033[0m";
                $flagDay++;
            } else {
                $flagDay = $flagDay === 2 ? 3 : 1;
            }
        }
        echo $dayD;
        echo " ";
        if ($day === "7") {
            echo PHP_EOL;
        }
        if ($incomingDate->format("d") <  $incomingDate->format("t")) {
            $incomingDate->modify("+1 day");
        } else {
            if ($flagMonth < $monthCount) {
                $flagMonth += 1;
                echo PHP_EOL;
                if ($month < 12) {
                    $month += 1;
                    $incomingDate->modify("first day of next month");
                } else {
                    echo PHP_EOL;
                    $incomingDate->modify("1st January next year");
                    echo $incomingDate->format("Y");
                    $month = 1;
                }
            } else {
                $month = "end_of_time"; // обрыв while
            }
        }
    }
}
calendar($year, $month, $monthCount);
