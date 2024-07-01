<?php
    if (isset($_POST['button1'])) {
        $name = $_POST['button1'];
        $db_host = "localhost";
        $db_user = "root";
        $db_pass = "root";
        $db_name = "facemash";
        
        $mysql = new mysqli($db_host, $db_user, $db_pass, $db_name);
        
        $ar = $mysql->query("SELECT `score` FROM `girls` WHERE `name` = '$name'")->fetch_all();
        $score= $ar[0][0] + 1;
        $query = $mysql->query("UPDATE `girls` SET `score` = '$score' WHERE `girls`.`name` = '$name'");

        $mysql->close();
    }

    if (isset($_POST['button2'])) {
        $name = $_POST['button2'];
        $db_host = "localhost";
        $db_user = "root";
        $db_pass = "root";
        $db_name = "facemash";
        
        $mysql = new mysqli($db_host, $db_user, $db_pass, $db_name);
        
        $ar = $mysql->query("SELECT `score` FROM `girls` WHERE `name` = '$name'")->fetch_all();
        $score = $ar[0][0] + 1;
        $query = $mysql->query("UPDATE `girls` SET `score` = '$score' WHERE `girls`.`name` = '$name'");

        $mysql->close();
    }

    header("Location: index.php");
?>