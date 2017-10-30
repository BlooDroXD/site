<?php include 'count.php';?>
<?php include 'db.php'; ?>

<html>
<head>
    <meta charset = "utf-8" />
    <title>Статистика</title>
</head>
<body   >
<ul id="nav">
    <li><a href="index.php">Главная</a></li>
    <li><a href="service.php">Услуги</a></li>
    <li><a href="contacts.php">Контакты</a></li>
    <li><a href="about.php">О нас</a></li>
</ul>


<p><a href="?interval=1">За сегодня</a></p>
<p><a href="?interval=7">За последнюю неделю</a></p>
<p><a href="?interval=30">За последний месяц</a></p>
<p><a href="?interval=365">За последний год</a></p>

<table  style="border: 1px solid silver;width: 100%;">
    <p id="retTitle" onLoad="getTitle()"> </p>
    <tr>
        <td style="border: 1px solid silver;"bgcolor="#6495ed">Дата</td>
        <td style="border: 1px solid silver;"bgcolor="#6495ed">IP UNIC</td>
        <td style="border: 1px solid silver;"bgcolor="#6495ed">Уникальных посетителей</td>
        <td style="border: 1px solid silver;"bgcolor="#6495ed">Просмотров</td>
    </tr>

</table>
</body>
</html>