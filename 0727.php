<!DOCTYPE html>
<html>
  <head>
    <link href="style.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title></title>
  </head>
  <body>
    <h3>Выберите цвет</h3>
    <!-- выбрать из нескольких цветов с помощью формы -->
      <form action="0727.php">
        <select name="color">
          <option>red</option>
          <option>blue</option>
          <option>green</option>
        </select>
        <p><input type="submit" value="Отправить"></p>
      </form>
    <p>
    <?php
    // этим стулом мастер Instocky начинает марафон по изучению PHP
    // начат под влиянием книги "MINI-привычки - MAXI-результаты.pdf"
    // ежедневно пишу 10 строк кода и изучаю-повторяю 1 функцию

    // функция switch
    // http://php.net/manual/ru/control-structures.switch.php

    $var = $_GET['color'];
    
    switch ($var) {
      case 'red':
        echo "Вы выбрали красный цвет";
        break;
      case 'blue':
        echo "Вы выбрали синий цвет";
        break;
      case 'green':
        echo "Вы выбрали зеленый цвет";
        break;
      default:
        echo "Вы еще ничего не выбрали";
        break;
    }
    ?>
  </p>

  </body>
</html>
