<?php
require_once 'core/init.php';

$title = 'Поддержка';

/** 
 * $arCategory - список категорий (init.php)
*/

$page_content = renderTemplate("support");

$result = renderTemplate('layout', 
                      ['content' => $page_content,
                      'title'=> 'Главная страница',
                      'arCategory' => $arCategory
]);

echo $result;