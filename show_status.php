<?php include 'db.php';?>
<?php include 'count.php';

// Указываем кодировку, в которой будет получена информация из базы
@mysqli_query ($db, 'set character_set_results = "utf8"');

// Извлекаем статистику по текущей дате (переменная date попадает сюда из файла count.php, который, в свою очередь, подключается в каждом из 4 обычных файлов)
$res = mysqli_query($db, "SELECT `views`, `hosts` FROM `visits` WHERE `date`='$date'");
$row = mysqli_fetch_assoc($res);

echo '<p style="font-size: 9px"><br> Уникальных посетителей: ' . $row['hosts'] . '</p>';
echo '<p style="font-size: 9px">Просмотров: ' . $row['views'] . '</p>';
