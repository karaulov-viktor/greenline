<?php

ob_start(); //включили буферизацию

echo 'Hello';

//$str = ob_get_contents(); // Возвращает данные из буфера
//ob_end_clean(); //Очишает буфер

$str = ob_get_clean(); //Возвращает данные из буфера / Очишает буфер



//echo $str; //проверка буфера
?>

<?php
echo setPageParam('page', '5');
?>

