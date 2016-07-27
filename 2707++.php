<?php
// функция file
// получаем текстовый файл в виде массива, один элемент=одна строка
// готовим отдельные куски HTML кода в виде файлов header.tpl ... footer.tpl
//  минус нельзя встроить php код(например год в footer.tpl) - решение шаблон smarty для передачи переменных из php

$arrayVar = file('template/header.tpl');
foreach ($arrayVar as $key => $value) {
  echo "$value";
}
$arrayVar = file('template/content.tpl');
foreach ($arrayVar as $key => $value) {
  echo "$value";
}
echo date('Y');
$arrayVar = file('template/footer.tpl');
foreach ($arrayVar as $key => $value) {
  echo "$value";
}

?>
