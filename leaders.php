<!-- UPDATE `girls` SET `score` = '2' WHERE `girls`.`id` = 1; -->
<!-- 17 -->

<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "root";
$db_name = "facemash";

$mysql = new mysqli($db_host, $db_user, $db_pass, $db_name);

$query = $mysql->query("SELECT * FROM `girls`");

$girls = $query->fetch_all();

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
        <p><?php echo $girls[0][1]?> - <?php echo $girls[0][2]?></p><br>
        <p><?php echo $girls[1][1]?> - <?php echo $girls[1][2]?></p><br>
        <p><?php echo $girls[2][1]?> - <?php echo $girls[2][2]?></p><br>
        <p><?php echo $girls[3][1]?> - <?php echo $girls[3][2]?></p><br>
        <p><?php echo $girls[4][1]?> - <?php echo $girls[4][2]?></p><br>
        <p><?php echo $girls[5][1]?> - <?php echo $girls[5][2]?></p><br>
        <p><?php echo $girls[6][1]?> - <?php echo $girls[6][2]?></p><br>
        <p><?php echo $girls[7][1]?> - <?php echo $girls[7][2]?></p><br>
        <p><?php echo $girls[8][1]?> - <?php echo $girls[8][2]?></p><br>
        <p><?php echo $girls[9][1]?> - <?php echo $girls[9][2]?></p><br>
        <p><?php echo $girls[10][1]?> - <?php echo $girls[10][2]?></p><br>
        <p><?php echo $girls[11][1]?> - <?php echo $girls[11][2]?></p><br>
        <p><?php echo $girls[12][1]?> - <?php echo $girls[12][2]?></p><br>
        <p><?php echo $girls[13][1]?> - <?php echo $girls[13][2]?></p><br>
        <p><?php echo $girls[14][1]?> - <?php echo $girls[14][2]?></p><br>
        <p><?php echo $girls[15][1]?> - <?php echo $girls[15][2]?></p><br>
        <p><?php echo $girls[16][1]?> - <?php echo $girls[16][2]?></p><br>
        <p><?php echo $girls[17][1]?> - <?php echo $girls[17][2]?></p><br>
        <p><?php echo $girls[18][1]?> - <?php echo $girls[18][2]?></p><br>
        <p><?php echo $girls[19][1]?> - <?php echo $girls[19][2]?></p><br>
        <p><?php echo $girls[20][1]?> - <?php echo $girls[20][2]?></p><br>
    </div>
</body>
</html>