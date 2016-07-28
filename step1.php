<meta charset="utf-8">

<?php
// внести данные в базу данных из файла string.txt

// подключение базы данных
  include_once 'config/db.php';


  $filename = 'string.txt';
  if (file_exists($filename)) { // существует ли файл
      // echo "Файл $filename существует";
      $arrayVar = file('string.txt'); // запись построчно из файла во временный массив
      foreach ($arrayVar as $key => $value) {
        $query = "INSERT INTO `tablevk` (`id`, `ip`) VALUES (NULL, '$value')"; // перенос из временного массива в запрос к БД
        $result = mysql_query($query, $db); // перенос в БД

    // проверка правильности запроса
        if (!$result) {
            $message  = 'Неверный запрос: ' . mysql_error() . "\n";
            $message .= 'Запрос целиком: ' . $query;
            die($message);
          }
        }

    mysql_close($db); // закрытие БД

    // удаление файла string.txt
    unlink('string.txt');
    echo "Данные внесены в БД";
  } else {
    echo "Файл $filename не существует";
  }
