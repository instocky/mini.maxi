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

    <?php

    // функция include
    // предназначена для подключения переменных определенных в другом файле
    // http://php.net/manual/ru/function.include.php

    include 'config/config.php';
    echo $var = "22+ $redVar <br>";

    // функция file
    // получаем текстовый файл в виде массива, один элемент=одна строка

    $arrayVar = file('string.txt');
    foreach ($arrayVar as $key => $value) {
      echo "$value";
    }
    ?>
  </p>
  </div>
  </body>
</html>
