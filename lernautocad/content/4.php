<?php
    //  вся процедура работает на сессиях. Именно в ней хранятся данные  пользователя, пока он находится на сайте. Очень важно запустить их в  самом начале странички!!!
    session_start();
    ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" lang="ru">
<link rel="stylesheet" type="text/css" href="css\1.css">
  <title>Построение Точки</title>
</head>
<body >
<div class="side">
      <ul class="menu">
        <li><a href="../index.php">Главная страница</a></li>
        <li class="menu__list"><a href="#">Построение простых графических примитивов</a>
          <ul class="menu__drop">
            <li><a href="1.php">Понятие графических примитивов</a></li>
            <li><a href="4.php">Построение точек</a></li>
            <li><a href="4-1.php">Построение отрезков</a></li>
            <li><a href="4-2.php">Построение прямых</a></li>
            <li><a href="4-3.php">Построение прямоугольников</a></li>
            <li><a href="2.php">Построение многоугольников</a></li>
            <li><a href="3.php">Построение окружностей</a></li>
            <li><a href="3-1.php">Построение дуг</a></li>
            <li><a href="3-2.php">Построение эллипсов</a></li>
            <li><a href="3-3.php">Задание 1</a></li>
            <li><a href="4-4.php">Задание 2</a></li>
            <li><a href="10.php">Тест по теме &quot;Постраение простых примитивов&quot;</a></li>
          </ul></li>
        <li class="menu__list"><a href="#">Построение сложных примитивов</a>
          <ul class="menu__drop">
            <li><a href="5.php">Построение сплайнов</a></li>
                      <li><a href="5-1.php">Построение полилиний</a></li>
                      <li><a href="5-2.php">Построение мультилиний</a></li>
                      <li><a href="11.php">Тест по теме &quot;Построение сложных примитивов&quot;</a></li>
          </ul>
        </li>
        <li class="menu__list"><a href="#">Редактирование и изменение объектов</a>
          <ul class="menu__drop">
           <li><a href="6.php">Удаление объектов. Отмена действий</a></li>
                      <li><a href="9.php">Назначение команд редактирования</a></li>
                      <li><a href="7.php">Копирование</a></li>
                      <li><a href="7-1.php">Перемещение</a></li>
                      <li><a href="7-2.php">Поворот</a></li>
                      <li><a href="7-3.php">Зеркальное отображение</a></li>           
                      <li><a href="8.php">Создание массивов</a></li>
                      <li><a href="8-1.php">Масштабирование</a></li>
                      <li><a href="8-2.php">Обрезка</a></li>
                      <li><a href="8-3.php">Фаска</a></li>
                      <li><a href="8-4.php">Сопряжение</a></li>
                      <li><a href="7-4.php">Задания</a></li>
                      <li><a href="12.php">Тест по теме &quot;Редактирование и изменению обьектов&quot;</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <div id="l1"><img src="images\autocad-u150-fr.png"></div>
<div id="head"><p>Электронное учебное пособие по программе AutoCAD</p></div>

<content><div><p id="u254753">&nbsp;</p>
      <p align="center"><b>Построение простых графических примитивов (точек, отрезков, прямых, прямоугольников)</b></p>
     <p>&nbsp;</p>
     <p align="center"><b>Построение Точки</b></p>
     <p>&nbsp;</p>
     <p>Ни один чертеж не обходится без таких простейших объектов, как точка. Этот объект не имеет задаваемых размеров. Точка на чертеже обозначается маленьким, размером в один пиксель объектом. Эти объекты служат в качестве базисных точек, определяющих последовательность размещения объектов чертежа, или для уточнения координат объектов. Точка на чертеже практически не видна, она становится видна, если навести на нее прицел указателя мыши.</p>
     <p>&nbsp;</p>
     <p>Команда <b>ТОЧКА</b> вызывается тремя способами:</p>
     <p>1) из меню <b>Рисование ► Точка ► Одиночная/Несколько</b></p>
     <p>2) щелчок по пиктограмме&nbsp; <b>Точка </b>в панели инструментов <b>Рисование</b></p>
     <p>3) Запрос в командную строку <b>Точка</b>:&nbsp; и нажать <b>Enter</b></p>
     <p>Затем укажите точку:</p>
     <p>1) либо введите с клавиатуры координаты точки, нажимаете Enter</p>
     <p>2) либо укажите местоположение точки с помощью курсора.</p>
     <p>&nbsp;</p>
     <p>Способ отображения точки может быть задан в диалоговом окне <b>Отображение точки</b>, которое вызывается с помощью соответствующего пункта выпадающего меню <b>Формат</b>.</p>
     <p>&nbsp;</p>
     <p align="center"> <img src="images\image001 (2).png"></p>
     <br><br>
     <p>Чтобы поделить отрезок на равные части при помощи инструмента <b>Точка</b> необходимо:</p>
     <p>1. во вкладке меню <b>Рисование</b> выбрать команду <b>Точка ► Поделить</b>.</p>
     <p>2. Затем щелкнуть один раз левой кнопкой мыши по отрезку для того, чтобы выбрать его.</p>
     <p>3. На появившийся запрос в командной строке <b>Введите число сегментов</b>: введите нужное число сегментов и нажмите <b>Enter</b>.</p>
     <p>4. В результате программа разобьет отрезок на необходимое вам число равных сегментов.</p>
     <p>На экране вы увидите отображенные точки в том формате и размере, в каком вы их настроите с помощью меню <b>Формат</b>. Например так:<img src="images\5.jpg"></p>
     <p align="center">&nbsp;</p>
     <p>&nbsp;</p>
     <center><a href="1.php">◄ Предыдущая</a>&nbsp;&nbsp;&nbsp;<a href="4-1.php"> Следующая ►</a></center>
      <p>&nbsp;</p></div></content>
</body>
</html>
