<?php if (!empty($arPage)): ?>
<p class="pages">
    <small>Страница 1 из <?=$curPage;?> из <?=$totalPage;?> </small>
    <?foreach ($arPage as $nPage):?>
    <?if ($curPage == $nPage):?> <?// Если эта страница текущая?>

    <span><?=$nPage;?></span>
        <?else:?>
    <a href="?page=<?=$nPage;?>"><?=$nPage;?></a> <?// Формируем ссылку на другие страницы?>
        <?endif;?>
    <?endforeach;?>
    <a href="#">&raquo;</a>
</p>
<?php endif;?>