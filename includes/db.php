<?php
//Подключение к базе данных
$lnk = mysqli_connect('127.0.0.1' , 'root' , '' , 'students_db');

if (!($lnk)){echo 'Не удалось подключиться к БД!'; echo mysqli_connect_error(); exit;}
?>
