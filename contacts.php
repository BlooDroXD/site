<!DOCTYPE HTML>
<html>
<head>
    <meta charset = "utf-8" />
    <title>Контакты</title>
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

<h2>Контакты</h2>

<p>Связвться с нами можно по телефону: 8-975-958-65-52 <br>
    или по электронной почте showstatusyoursyte@showstats.com</p>
<p><img src="ok.png" width="15%" height="50%" id="pic1" onmouseout="swap_png1('ok');" onmouseover="swap_gif1('Satan');" />
    <img src="kspr.png" width="15%" height="50%" id="pic2" onmouseout="swap_png2('kspr');" onmouseover="swap_gif2('Satan');" />
    <img src="vk.png" width="15%" height="50%" id="pic3" onmouseout="swap_png3('vk');" onmouseover="swap_gif3('Satan');" />
    <img src="dweb.png" width="15%" height="50%" id="pic4" onmouseout="swap_png4('dweb');" onmouseover="swap_gif4('Satan');" /> </p>
<input style="height: 50px;width: 250px " value="Кнопка для развлечения" type="button" onclick="msgClick()">
<div class="stats">
    <?php include 'show_stats.php';?>
</div>
</body>
</html>