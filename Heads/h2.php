<?php
header('Content-type: text/plain');
header('Content-disposition: attachment; filename="downloaded.txt');
$text = isset($_GET['text']) ? $_GET['text'] :'';
echo $text;
