<!DOCTYPE HTML>
<html>
<head>
    <meta charset = "utf-8" />
    <title>Наши услуги</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script src="script.js"></script>
</head>

<body>

<ul id="nav">
    <li><a href="index.php">Главная</a></li>
    <li><a href="service.php">Услуги</a></li>
    <li><a href="contacts.php">Контакты</a></li>
    <li><a href="about.php">О нас</a></li>
</ul>

<h2>Наши услуги</h2>
<p>Стоимость установки счётчика посещения страниц сайта : 300 рублей. <br>
    Ежемесячная оплата  оставляет 20 рублей.<br> Все реквизиты выдаются во время установки или при вашем обращении к нашей команде по адресу г.Москва, проспект Победы дом 12, корпус 3. <br>
    Или по электронному адресу support@showstats.com</p>
<p><img src="ok.png" width="15%" height="50%" id="pic1" onmouseout="swap_png1('ok');" onmouseover="swap_gif1('Satan');" />
    <img src="kspr.png" width="15%" height="50%" id="pic2" onmouseout="swap_png2('kspr');" onmouseover="swap_gif2('Satan');" />
    <img src="vk.png" width="15%" height="50%" id="pic3" onmouseout="swap_png3('vk');" onmouseover="swap_gif3('Satan');" />
    <img src="dweb.png" width="15%" height="50%" id="pic4" onmouseout="swap_png4('dweb');" onmouseover="swap_gif4('Satan');" /> </p>
<div class="stats">
    <?php include 'show_stats.php';?>
</div>
</body>
</html>