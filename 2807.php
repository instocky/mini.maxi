<!DOCTYPE html>
<html>
  <head>
    <link href="style.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title></title>
  </head>
  <body>
    <div class="container">
      <form action="2807.php">
        <p><input type="text" name="text" value=""></p>
        <p><input type="submit" value="Отправить"></p>
<?php
// сегодня 2-й день мини-привычки изучения функций
// if + $_GET

include_once 'config/config.php';

if(isset($_GET['text'])) {
  echo "Вы ввели " . $var = $_GET['text'];
}else {
  echo "Введите текст пожалуйста";
}
