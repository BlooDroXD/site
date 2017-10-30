<!DOCTYPE HTML>
<html>
<head>
    <meta charset = "utf-8" />
    <title>О нас</title>
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

<h2>О нас</h2>
<p> Мы предоставляем услуги по созданию и размещению счётчиков посещений страниц Вашего сайта.<br> Будем рады помочь Вам. <br></p>
<p>Услугами нашей компании уже пользуются огромное количество пользователей крупнейших сайтов, таких как Вконтакте, Касперский, Dr.Web и другие посмотреть которые вы можете ниже. </p>
<p><img src="ok.png" width="15%" height="50%" id="pic1" onmouseout="swap_png1('ok');" onmouseover="swap_gif1('Satan');" />
    <img src="kspr.png" width="15%" height="50%" id="pic2" onmouseout="swap_png2('kspr');" onmouseover="swap_gif2('Satan');" />
    <img src="vk.png" width="15%" height="50%" id="pic3" onmouseout="swap_png3('vk');" onmouseover="swap_gif3('Satan');" />
    <img src="dweb.png" width="15%" height="50%" id="pic4" onmouseout="swap_png4('dweb');" onmouseover="swap_gif4('Satan');" /> </p>
<div class="stats">
    <?php include 'show_stats.php';?>
</div>
</body>
</html>