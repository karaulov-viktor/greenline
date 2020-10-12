<?php 
/*
Подключает шаблон к функции
*/
function renderTemplate($name, $data = [])
{
    $result = ''; //Подготавливаем результат
    $name = $_SERVER['DOCUMENT_ROOT'] . '/templates/' . $name . '.php'; //Создаём полный путь из $name
    if(!file_exists($name)){
        return $result; //Если такого файла нет, возвращаем результат
    }
     
    ob_start(); // Начало буферизации

    extract($data); // создаёт переменные из массива. ['title' => '123'] = $title = '123'
    require_once $name; // Подключаем шаблон
    $result = ob_get_clean(); //Выводим данные из буфера
  

    return $result; //Возвращаем результат
}