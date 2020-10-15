<?php

require_once 'core/init.php';

/** 
 * $arCategory - список категорий (init.php)
*/

$title = 'Главная страница';

$res = mysqli_query($link, "SELECT n.`id`, n.`title`, n.`preview_text`, n.`date`, n.`image`, n.`comments_cnt`, c.`title` AS news_cat FROM `news` n JOIN `category` c ON c.`id` = n.`category_id` LIMIT 0, 3");
$arNews = mysqli_fetch_all($res, MYSQLI_ASSOC);

//pr ($arNews)  

$page_content = renderTemplate("main", [
                                'arNews' =>$arNews
]);

$res = renderTemplate('layout', 
                      ['content' => $page_content,
                      'title'=> 'Главная страница',
                      'arCategory' => $arCategory]);
 echo $res;                     

?>

