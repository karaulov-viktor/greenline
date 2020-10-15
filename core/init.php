<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config/config.php';//подключение файла с настройками
require_once $_SERVER['DOCUMENT_ROOT'] . '/config/db.php';//Подключение с базой данных
require_once $_SERVER['DOCUMENT_ROOT'] . '/core/function.php';//Подключение функций



// список категорий.
$res = mysqli_query($link, "SELECT * FROM `category` ORDER BY `title` ASC"); 
$arCategory = mysqli_fetch_all($res, MYSQLI_ASSOC); 
//


