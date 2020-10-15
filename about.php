<?php
require_once 'core/init.php';

$title = 'О нас';

/** 
 * $arCategory - список категорий (init.php)
*/

$page_content = renderTemplate("about");

$result = renderTemplate('layout', 
                      ['content' => $page_content,
                      'title'=> 'Главная страница',
                      'arCategory' => $arCategory
]);

echo $result;