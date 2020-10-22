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

/*
*Функция для вывода массива для проверки.
*/
function pr($arr){
     echo '<pre>';
     print_r($arr);
     echo '</pre>';
}

/**
 * Функция добавления параметра в адресную строку
 */
function setPageParam($param, $value)
{
    $qParam = $_SERVER ['QUERY_STRING']; //Получаем строку с параметрами
    parse_str($qParam, $arr); // Генерируем массив из этой строки
    if(is_array($param) && !empty($value)){ //если передан параметр
        if(array_key_exists($param, $arr)){ //если есть такой ключ в массиве
        $arr[$param] = $value; //поменяли значение в полученном масиве
        }else{
            $arr[$param] = $value;
        }
    }
    return http_build_query($arr);


}
