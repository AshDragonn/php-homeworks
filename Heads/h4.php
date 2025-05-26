<?php
session_start();
echo (($_SESSION['count'] % 3 === 0) ? 'Количество открытий страницы №3: ' . $_SESSION['count'] :'') ;

// session_destroy ();