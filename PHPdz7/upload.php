<?php
declare(strict_types=1);

$uploaddir = "D:\php\Netology\PHPdz7";
$uploadfile = $uploaddir . '\\' .  $_POST["file_name"];
if ($_POST["file_name"] === "" || $_FILES['content']['name'] === "") {
    header('Location: http://localhost:8000/index.html');
} else {
    move_uploaded_file($_FILES['content']['tmp_name'], $uploadfile);

    echo 'Файл ' . $_POST["file_name"] . '<br>' .
        'загружен в ' . realpath(dirname($uploadfile)) . '<br>' .
        'размер файла: ' . round((intval($_FILES['content']["size"]) / 1024), 2) . 'kb';
}
