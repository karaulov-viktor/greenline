<?php
$link = mysqli_connect('localhost', 'root', '', 'greenline');

if(!link){

  echo 'Произошла ошибка' . PHP_EOL;
  echo 'Код ошибки' . mysqli_connect_errno() . PHP_EOL;
  echo 'Текст ошибки' . mysqli_connect_error();
  die();
}

mysqli_set_charset($link, "utf8");

$res = mysqli_query($link, "SELECT * FROM `category` ORDER BY `title` ASC");
$arCategory = mysqli_fetch_all($res, MYSQLI_ASSOC);

 echo '<pre>';
 print_r($arCategory);
echo '</pre>';

?>
<!DOCTYPE html>
<html>
<head>
<title>GreenLine</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/radius.js"></script>
</head>
<body>
<!-- START PAGE SOURCE -->
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="menu_nav">
        <ul>
          <li class="active"><a href="index.html">Home</a></li>
          <li><a href="support.html">Support</a></li>
          <li><a href="about.html">About Us</a></li>
          <li><a href="contact.html">Contact Us</a></li>
        </ul>
      </div>
      <div class="logo">
        <h1><a href="index.html">Green<span>Line</span></a> <small>put your slogan here</small></h1>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <h2>Над рынком нефти сгущаются тучи, а золото определяется с направлением</h2>
          <div class="clr"></div>
          <p><span class="date">29.09.2020</span> Автор <a href="#">Admin</a> &nbsp;|&nbsp; Категория <a href="#">Финансы</a></p>
          <img src="images/img1.jpg" width="625" height="205" alt="" />
          <p>Похоже, что над рынком нефти сгущаются тучи. Такой вывод можно сделать исходя из многих факторов, начиная новостями касательно ОПЕК, и заканчивая прогнозами компании Vitol, специализирующейся на торговле энергоносителями.
            Однако нам еще предстоит выяснить, какое влияние это окажет на цены в ближайшей перспективе.</p>
          <p class="spec"><a href="news_detail.html" class="rm">Читать далее &raquo;</a> <a href="#" class="com"><span>11</span> Комментариев</a></p>
        </div>
        <div class="article">
          <h2>12-ядерный Ryzen 9 5900X сможет работать на частоте до 5 ГГц, но TDP вырастет до 150 Вт</h2>
          <div class="clr"></div>
          <p><span class="date">28.09.2020</span> Автор <a href="#">Owner</a> &nbsp;|&nbsp; Категория <a href="#">Технологии</a></p>
          <img src="images/img2.jpg" width="625" height="205" alt="" />
          <p>До анонса новых процессоров AMD осталось всего 10 дней. Уже 8 октября компания анонсирует настольные CPU Ryzen 5000. Да, согласно всем последним слухам и утечкам, AMD наконец-то выровняет свои линейки по названиям, так что настольных Ryzen 4000 попросту не будет.</p>
          <p class="spec"><a href="news_detail.html" class="rm">Читать далее &raquo;</a> <a href="#" class="com"><span>7</span> Комментариев</a></p>
        </div>
        <p class="pages"><small>Страница 1 из 2 &nbsp;&nbsp;&nbsp;</small> <span>1</span> <a href="#">2</a> <a href="#">&raquo;</a></p>
      </div>
      <div class="sidebar">
        <div class="searchform">
          <form id="formsearch" name="formsearch" method="post" action="#">
            <span>
            <input name="editbox_search" class="editbox_search" id="editbox_search" maxlength="80" value="Поиск по сайту:" type="text" />
            </span>
            <input name="button_search" src="images/search_btn.gif" class="button_search" type="image" />
          </form>
        </div>
        <div class="gadget">
          <h2 class="star"><span>Категории</span></h2>
          <div class="clr"></div>
          <ul class="sb_menu">

            <?foreach($arCategory as $category):?>
              <li><a href="#"><?=$category['title'];?></a></li>
            <?endforeach;?>
          </ul>
        </div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="fbg">
    <div class="fbg_resize">
      <div class="col c1">
        <h2><span>Фото</span></h2>
        <a href="#"><img src="images/pix1.jpg" width="58" height="58" alt="" /></a>
        <a href="#"><img src="images/pix2.jpg" width="58" height="58" alt="" /></a>
        <a href="#"><img src="images/pix3.jpg" width="58" height="58" alt="" /></a>
        <a href="#"><img src="images/pix4.jpg" width="58" height="58" alt="" /></a>
        <a href="#"><img src="images/pix5.jpg" width="58" height="58" alt="" /></a>
        <a href="#"><img src="images/pix6.jpg" width="58" height="58" alt="" /></a>
      </div>
      <div class="col c2">
        <h2><span>Подписка на новости</span></h2>
        <p>Будь в курсе!<br />
          На сайте представлена подборка самых свежих новостей науки, медицины, современных технологий и многого другого. Вы можете подписаться на нашу рассылку, чтобы всегда быть в курсе.</p>
        <div>
          <form class="subscribe">
            <input type="email" name="email" placeholder="Ваш email" />
            <input type="submit" class="button" value="Подписаться" />
          </form>
        </div>
      </div>
      <div class="col c3">
        <h2><span>Контакты</span></h2>
        <p>Мы будем рады ответить на любые вопросы.</p>
        <p><a href="#">support@yoursite.com</a></p>
        <p>+1 (123) 444-5677<br />
          +1 (123) 444-5678</p>
        <p>Адрес: 123 TemplateAccess Rd1</p>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="footer">
    <div class="footer_resize">
      <p class="lf">Copyright &copy; 2010 <a href="#">SiteName</a> - All Rights Reserved</p>
      <p class="rf"><a href="">Free CSS Templates</a></p>
      <div class="clr"></div>
    </div>
  </div>
</div>
<!-- END PAGE SOURCE -->
</body>
</html>
