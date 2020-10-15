<?php
require_once 'core/init.php';

$title = 'Контакты';

/** 
 * $arCategory - список категорий (init.php)
*/

$page_content = renderTemplate("contact");

$result = renderTemplate('layout', 
                      ['content' => $page_content,
                      'title'=> 'Главная страница',
                      'arCategory' => $arCategory
]);

echo $result;