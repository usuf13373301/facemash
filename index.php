<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "root";
$db_name = "facemash";

$left = rand(1, 21);
$right = rand(1, 21);

if ($left == $right) {
    $left = $left + rand(1, 21);
    $left = $left % 22;
}

$mysql = new mysqli($db_host, $db_user, $db_pass, $db_name);

$query1 = $mysql->query("SELECT * FROM `girls` WHERE `id`='$left'");
$query2 = $mysql->query("SELECT * FROM `girls` WHERE `id`='$right'");

$girl1 = $query1->fetch_all();
$girl2 = $query2->fetch_all();

$mysql->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>facemash</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <a href="index.php" class="at">FACEMASH</a>
        <a href="leaders.php">Таблица лидеров</a>
    </div>
    <div class="container">
        <h2>Кто красивее? Кликни на имя которое ты хочешь выбрать!</h2>
        <p>Начало челленджа 23 июня 8 утра по московскому времени. Конец - 24 июня 8 утра по московскому времени</p>
    </div>
    <div class="girls">
        <div class="left">
            <form action="check.php" method="post">
                <input type="submit" value="<?php echo $girl1[0][1]?>" class="btn" name="button1">
            </form>
            <img src="images/<?php echo $girl1[0][0]?>.jpg" alt="" class="photo">
            <p>Рейтинг: <?php echo $girl1[0][2]?></p>
        </div>
        <h2 class="vs">VS</h2>
        <div class="right">
            <form action="check.php" method="post">
                <input type="submit" value="<?php echo $girl2[0][1]?>" class="btn" name="button2">
            </form>
            <img src="images/<?php echo $girl2[0][0]?>.jpg" alt="" class="photo">
            <p>Рейтинг: <?php echo $girl1[0][2]?></p>
        </div>
    </div>
</body>
</html>