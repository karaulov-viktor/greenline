<?if(!empty($arNews)):?>

    <?foreach($arNews as $news):?>
        <div class="article">
          <h2><?=$news['title'];?></h2>
          <div class="clr"></div>
          <p><span class="date">29.09.2020</span> Автор <a href="#">Admin</a> &nbsp;|&nbsp; Категория <a href="#"><?=$news['news_cat'];?></a></p>
          <img src="images/<?=$news['image']?>" width="625" height="205" alt="" />
          <p><?=$news['preview_text'];?></p>
          <p class="spec"><a href="/news_detail.php?id=<?=$news['id']?>" class="rm">Читать далее &raquo;</a> <a href="/news_detail.php?id=<?=$news['id']?>" class="com"><span><?=$news['comments_cnt']?></span> Комментариев</a></p>
        </div>
    <?endforeach;?>    


<?=$navigation;?>

<?else:?>
    <p>Новостей пока нет</p>
<?endif;?>