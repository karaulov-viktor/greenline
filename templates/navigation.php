<?php if($show):?>
<p class="pages">
    <small>Страница 1 из <?=$curPage;?> из <?=$totalPage;?> </small>

    <?if($curPage > 1): //Выводим ссылку на первую странницу, если нужна ?>
    <a href="?page=1">&laquo;</a>
    <?endif;?>

    <?if($prevPage != ''): //Выводим сселку на предыдущую страницу?>
    <a href="?page=<?=$prevPage;?>"><?=$prevPage;?></a>
    <?endif;?>

    <span><?=$curPage;?></span> <?//Текущая страница?>

    <?if($nextPage != ''): //Выводим ссылку на следующую страницу?>
        <a href="?page=<?=$nextPage;?>"><?=$nextPage;?></a>
    <?endif;?>


    <?if($curPage < $totalPage): //Выводим на последнюю страницу?>
        <a href="?page=<?=$totalPage;?>">&raquo;</a>
    <?endif;?>
</p>
<?php endif;?>









    <?/*foreach ($arPage as $nPage):?>
    <?if ($curPage == $nPage):?> <?// Если эта страница текущая?>

    <span><?=$nPage;?></span>
        <?else:?>
    <a href="?page=<?=$nPage;?>"><?=$nPage;?></a> <?// Формируем ссылку на другие страницы?>
        <?endif;?>
    <?endforeach;*/?>

