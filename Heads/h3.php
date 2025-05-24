<?php 
session_start();

$_SESSION['count'] = (isset($_SESSION['count']) + 1) ? ++$_SESSION['count'] : 0;
if($_SESSION['count'] % 3 === 0) {
    header('Location: http://localhost:8000/h4.php');
}
echo 'Количество открытий страницы' .PHP_EOL . $_SESSION['count']; 