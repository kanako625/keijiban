<?php
mb_internal_encoding("utf8");

$pdo=new PDO("mysql:dbname=lesson01;host=localhost;","root","");
$pdo->exec("insert into 4each_keijiban(handlename,title,comments)
values('".$_POST['handlename']."','".$_POST['title']."','".$_POST['comments']."');");

header("Location:http://localhost/4each_keijiban/index.php");
?>

<!doctype HTML>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>入力フォーム</title>
    <link rel="stylesheet"type="text/css"href="style.css">
</head>