<?php include 'count.php';?>
<?php include 'db.php'; ?>

<html>
<head>
    <meta charset = "utf-8" />
    <title>Статистика</title>
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
    <?php
    // Если в массиве GET есть элемент interval (т.е. был клик по одной из ссылок выше)
    if (isset($_GET['interval']))
    {
        $interval = $_GET['interval'];
        // Если в качестве параметра передано не число
        if (!is_numeric ($interval))
        {
            echo '<p><b>Недопустимый параметр!</b></p>';
        }
        else {

            // Указываем кодировку, в которой будет получена информация из базы
            @mysqli_query($db, 'set character_set_results = "utf8"');

            // Получаем из базы данные, отсортировав их по дате в обратном порядке в количестве interval штук


            if ($interval == 7){
                $res = mysqli_query($db, "SELECT * FROM `visits` WHERE year(date) = year(now()) and week(date, 1) = week(now(), 1)");
            }
            else if ($interval == 30){
                $res = mysqli_query($db, "SELECT * FROM `visits` WHERE month(date) = month(now()) and year(date) = year(now())");

            }else if ($interval == 365){
                $res = mysqli_query($db, "SELECT * FROM `visits` WHERE year(date) = year(now())");

            }
            else if ($interval == 1){
                $res = mysqli_query($db, "SELECT * FROM `visits` WHERE month(date) = month(now()) and year(date) = year(now()) and day(date) = day(now())");

            }
            else{
                $res = mysqli_query($db, "SELECT * FROM `visits`");
            }
            $res2 = mysqli_query($db, "SELECT ip_address FROM `ips`");
            $row2 = mysqli_fetch_assoc($res2);
            // Формируем вывод строк таблицы в цикле
            while ($row = mysqli_fetch_assoc($res)) {
                echo '<tr style ="width: 100%;">
			     <td style="border: 2px solid silver;"bgcolor="white">' . $row['date'] . '</td>
			     <td style="border: 2px solid silver;"bgcolor="white">' . $row2['ip_address'] . '</td>
			     <td style="border: 2px solid silver;"bgcolor="white">' . $row['hosts'] . '</td>
			     <td style="border: 2px solid silver;"bgcolor="white">' . $row['views'] . '</td>
			     
			 </tr>';
            }
        }
    }

    ?>

</table>
</body>
</html>