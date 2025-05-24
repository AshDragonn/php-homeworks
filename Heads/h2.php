<?php
header('Content-type: text/plain');
header('Content-disposition: attachment; filename="downloaded.txt');
echo $text = $_GET["text"];
