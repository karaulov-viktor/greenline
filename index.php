<?php

require_once 'core/init.php';

/** 
 * $arCategory - список категорий (init.php)
 * $link - ресурс запроса
*/

$title = 'Главная страница';
$num = 3; // Колличество новостей на странице

$resTotal = mysqli_query($link, "SELECT * FROM `news`");
$total = mysqli_num_rows($resTotal); // Колличество записей в запросе

$totalStr = ceil($total / $num); // функция для равного деления новостей на странице.

$page = intval($_GET['page']); // Получение номера страницы из адресной строки. intval приводит принудительно к числу.
if($page <= 0){
 $page =1; // если номер страници не существует или отрицателен.
}elseif($page > $total){
 $page = $total; // если номер страницы больше чем их колличество.
}

$offset = $page * $num - $num; // С какой новости начинать.
/**
 * Фильтрация по категориям
 */
$where = '';
if(isset($_GET['category'])){
    $category = intval($_GET['category']);
    if($category > 0){
        $where = 'WHERE `category_id` = ' . $category;
    }
    pr($_GET);
}

$res = mysqli_query($link, "SELECT n.`id`, n.`title`, n.`preview_text`, n.`date`, n.`image`, n.`comments_cnt`, c.`title` AS news_cat".
    " FROM `news` n JOIN `category` c ON c.`id` = n.`category_id` $where ORDER BY n.`id` LIMIT $offset, $num");


$arNews = mysqli_fetch_all($res, MYSQLI_ASSOC);

$arPage = range(1, StotalStr); // массив со страницами [1,2,3,4.....]

$prevPage = '';
if ($page >1){
    $prevPage = $page - 1;
}

$nextPage = '';
if($page < $totalStr){
    $nextPage = $page + 1;
}

$is_nav = ($totalStr > 1) ? true : false;



//////////////////////////////////////////////////////////////////////////
$pageNavigation = renderTemplate('navigation', [//Передаем текущую страницу
                                                       // 'arPage =>$arPage' // Передает
                                                         'totalPage' => $totalStr, //
                                                         'curPage' => $page, //
                                                         'nextPage' => $nextPage, //
                                                         'prevPage' => $prevPage, //
                                                         'show' => $is_nav //
]); // Получаем HTML шаблона навигации. Передаём массив со страни

$page_content = renderTemplate("main", [ // Получаем HTML главного блока шаблона main (изменяемого блока с новостями)
                                'arNews' =>$arNews, // Передаём массив с новостями
                                'navigation' => $pageNavigation // Передаём полученный HTML код навигации

]);

$result = renderTemplate('layout', // главный шаблон страницы
                      ['content' => $page_content, // Передаем HTML код шаблона ьфшт
                      'title'=> $title, // Передаем заголовок окна
                      'arCategory'=> $arCategory]); // Передаём массив с категориями полученный из базы данных

 echo $result;

?>

