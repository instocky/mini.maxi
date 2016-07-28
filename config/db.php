<?php
// конфгурирование Базы Данных
$dblocation = "127.0.0.1"; // локльный IP альтернативный код: $dblocation = "localhost"
$dbname = "iptest";
$dbuser = "root";
$dbpasswd = "";

// соединение с MySQL
$db = mysql_connect($dblocation, $dbuser, $dbpasswd);

if(! $db) {
  echo "Ошибка доступа к MySQL"; // если переменная(соединение) $db не существует
  exit();
}

// подключение к БД для текущего соединения
mysql_set_charset('utf8');
mysql_select_db($dbname, $db);

if(! mysql_select_db($dbname, $db)) {
  echo "Ошибка доступа к базе данных:{$dbnane}";
  exit();
}
