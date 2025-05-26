<?php 
session_start();

$_SESSION['count'] = isset($_SESSION['count']) ? ++$_SESSION['count'] : 1;
if($_SESSION['count'] % 3 === 0) {
    header('Location: /h4.php');
}
echo 'Количество открытий страницы' .PHP_EOL . $_SESSION['count']; 