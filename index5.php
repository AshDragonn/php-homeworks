<?php
declare(strict_types=1);

const OPERATION_EXIT = 0;
const OPERATION_ADD = 1;
const OPERATION_DELETE = 2;
const OPERATION_PRINT = 3;

$operations = [
    OPERATION_EXIT => OPERATION_EXIT . '. Завершить программу.',
    OPERATION_ADD => OPERATION_ADD . '. Добавить товар в список покупок.',
    OPERATION_DELETE => OPERATION_DELETE . '. Удалить товар из списка покупок.',
    OPERATION_PRINT => OPERATION_PRINT . '. Отобразить список покупок.',
];

$items = [];

function getOperationNumber(array $operations, array $items) : string {
    $arr = $operations;
    do {
        printCard($items);        
        echo 'Выберите операцию для выполнения: ' . PHP_EOL;
        // Проверить, есть ли товары в списке? Если нет, то не отображать пункт про удаление товаров
        if(count($items)){
            echo implode(PHP_EOL, $operations) . PHP_EOL . '> ';
        } else {
            array_splice($arr, 2,1);
            echo implode(PHP_EOL, $arr) . PHP_EOL . '> ';
        }
        $result = trim(fgets(STDIN));
        if (!array_key_exists($result, $operations)) {
            system('cls');
            echo '!!! Неизвестный номер операции, повторите попытку.' . PHP_EOL;
        }
    } while (!array_key_exists($result, $operations));
    return $result;
}    

function addProduct(array &$items) : void {
    echo "Введите название товара для добавления в список: \n> ";
    $itemName = trim(fgets(STDIN));
    $items[] = $itemName;
}

function deleteProduct(array &$items) : void {
    // Проверить, есть ли товары в списке? Если нет, то сказать об этом и попросить ввести другую операцию
    echo 'Текущий список покупок:' . PHP_EOL;
    printCard($items);
    $itemName = '';
    while (true) {
        echo 'Введите название товара для удаления из списка:' . PHP_EOL . '> ';
        $itemName = trim(fgets(STDIN));
        if (in_array($itemName, $items, true) !== false) {
            while (($key = array_search($itemName, $items, true)) !== false) {
                unset($items[$key]);
        }
        break;
        } else {
            echo 'Названия "' . $itemName . '" в корзине нет.'. PHP_EOL;
            echo 'Повторите операцию'. PHP_EOL;
        }
    }
}

function printProduct(array &$items) : void {
    printCard($items);
    echo 'Всего ' . count($items) . ' позиций. '. PHP_EOL;
    echo 'Нажмите enter для продолжения';
    fgets(STDIN);
}

function printCard(array &$items) : void {
    if (count($items)) {
            echo 'Ваш список покупок: ' . PHP_EOL;
            echo implode("\n", $items) . "\n";
    } else {
            echo 'Ваш список покупок пуст.' . PHP_EOL;
    }
}    

do {
    // system('clear');
    system('cls'); // windows
    $operationNumber = getOperationNumber($operations, $items);
    echo 'Выбрана операция: '  . $operations[$operationNumber] . PHP_EOL;
    switch ($operationNumber) {
        case OPERATION_ADD:
            addProduct($items);
            break;

        case OPERATION_DELETE:
            deleteProduct($items);
            break;

        case OPERATION_PRINT:
            printProduct($items);
    }
    echo "\n ----- \n";
} while ($operationNumber > 0);

echo 'Программа завершена' . PHP_EOL;