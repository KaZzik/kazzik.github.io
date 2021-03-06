<?php
    //  вся процедура работает на сессиях. Именно в ней хранятся данные  пользователя, пока он находится на сайте. Очень важно запустить их в  самом начале странички!!!
    session_start();
    ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" lang="ru">
<link rel="stylesheet" type="text/css" href="css\1.css">
  <title>Создание фасок</title>
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

<content><div><p>&nbsp;</p>
       <p>&nbsp;</p>
    <p align="center"><b>Создание фасок</b></p>
     <p>&nbsp;</p>
     <p>Очень часто на деталях требуется обозначить фаски, например фаску под сварочный шов или фаски после токарной обработки. Программа AutoCAD 2014 позволяет создавать фаски на углах, образованных двумя непараллельными отрезками. Причем отрезки могут как пересекаться, так и не пересекаться. В случае если отрезки не пересекаются, перед снятием фасок они будут удлинены до пересечения.</p>
     <p>Для создания фасок в программе предусмотрена команда<b> Фаска (_Chamfer)</b>. Вызвать эту команду можно тремя способами.</p>
     <p>1. Выбрать команду меню <b>Редактировать ► Фаска (Modify ► Chamfer).</b></p>
     <p>2. Ввести в командную строку команду<b> Фаска (_Chamfer)</b>.</p>
     <p>3. В группе элементов управления <b>Редактирование (Modify) </b>нажать кнопку<img src="images\28.jpg">&nbsp; .</p>
     <p>&nbsp;</p>
     <p><b>Рассмотрим построение фаски на примере:</b></p>
     <p>1. Создайте новый чертеж.</p>
     <p>2. Проверните колесико мыши на 6 щелчков от себя, чтобы выбрать приемлемый масштаб отображения.</p>
     <p>3. В панели навигации, расположенной в правой части экрана, нажмите кнопку Начало системы координат отобразится в левом нижнем углу экрана.</p>
     <p>4. Введите в командную строку команду<b> Прямоуг (_Rectang)</b> и начертите прямоугольник с координатами углов: левый нижний угол – 50.000,50.000; правый верхний угол — 150.000,100.000.</p>
     <p>5. Введите в командную строку команду <b>Фаска (_Chamfer)</b> и нажмите клавишу <b>Enter</b>.</p>
     <p>В командной строке появится запрос: <b>Выберите первый отрезок или [оТменить полИлиния Длина Угол оБрезка Метод Несколько]: Select first line of [Undo Polyline Distance Angle Trim Method mUltiline]:</b>. Над командной строкой вы увидите текущие режимы построения фаски: <b>(Режим С ОБРЕЗКОЙ) параметры фаски Длина1=0.0000, Длина2=0.0000 ((Trim mode) Current chamfer Distl =0.0000, Dist2=0.0000).</b> To есть пo умолчанию фаска построена не будет, так как длина первого и второго катетов фаски равна нулю.</p>
     <p>Чтобы построить фаску, следует сначала задать длину первого и второго отрезков. Если ранее фаски строились, значения длины первого и второго отрезков, введенные при последнем построении, будут показаны в текущих режимах построения над командной строкой.</p>
     <p>Построим фаску с длиной первого отрезка <b>15 мм</b>, второго отрезка 10 мм.</p>
     <p>6. Выберите в командной строке опцию Длина (Distance). В командной строке появится запрос: <b>Первая длина фаски &lt;0.0000&gt;: (Specify first champer distance &lt;0.0000&gt;:)</b>.</p><br><p align="center"><img src="images\image008 (3).png" height="200" width="400"></p>
     <p>&nbsp;</p>
     <p>7. Введите значение<b> 15.000</b> и нажмите клавишу <b>Enter</b>. В командной строке появится запрос:<b> Вторая длина фаски &lt;15.0000&gt;: (Specify second chamfer distance &lt;15.0000&gt;:)</b>.</p>
     <p>8. Введите значение <b>10.000 </b>и нажмите клавишу<b> Enter</b>. В командной строке появится запрос:<b> Выберите первый отрезок или [оТменить полИлиния Длина Угол оБрезка Метод Несколько]: Select first line of [Undo Polyline Distance Angle Trim Method mUltiline]:</b>.</p>
     <p>9. Щелкните мышью на первом отрезке. В командной строке появится запрос: Выберите второй отрезок или нажмите клавишу<b> Shift</b> при выборе, чтобы создать угол, или<b> [Расстояние Угол Метод]: (Select second line or Shift-select to apply corner or [Distance Angle Method]:)</b>.</p>
     <p>10. Щелкните мышью на втором отрезке. Фаска построена:</p>
     <p>&nbsp;</p>
     <p align="center"><img src="images\image009 (3).png" height="200" width="400"></p>
     <p>&nbsp;</p>
     <p><b>Второй метод построения фаски</b> — по длине отрезка и прилегающему к этому отрезку углу. Так, например, удобно задавать довольно часто встречающуюся фаску под 45°.</p>
     <p>11. Введите любым удобным для вас способом в командную строку ко-манду <b>Фаска (_Chamfer)</b> и нажмите клавишу<b> Enter</b>.</p>
     <p>Обратите внимание: если команда недавно применялась, выбрать ее можно, нажимая клавишу<b> Стрелка вверх</b> на стрелочной клавиатуре.</p>
     <p>12. Выберите опцию Угол (Angle). В командной строке появится запрос:<b> Первая длина фаски &lt;0.0000&gt;: (Specify chamfer length on the first line &lt;0.0000&gt;:)</b>.</p>
     <p>13. Введите требуемое значение, например, <b>10.000</b> и нажмите клавишу <b>Enter</b>. В командной строке появится запрос: <b>Угол фаски с первым отрезком &lt;0&gt;: (Specify chamfer angle from the first line &lt;0&gt;:)</b>.</p>
     <p>14. Введите требуемое значение угла фаски, например <b>45</b>, и нажмите клавишу <b>Enter</b>.</p>
     <p>Над командной строкой появятся выбранные параметры построения фаски <b>Первая длина фаски &lt;0.0000&gt;: 10.0000 (Specify chamfer length on the first line &lt;0.0000&gt;: 10.0000); Угол фаски с первым отрезком &lt;0&gt;: 45 (Specify chamfer angle from the first line &lt;0&gt;: 45).</b> В командной строке появится запрос: <b>Выберите первый отрезок или [оТменить полИлиния Длина Угол оБрезка Метод Несколько]: Select first line of [Undo Polyline Distance Angle Trim Method mUltiline]:</b>.</p>
     <p>15. Щелкните мышью на отрезке фигуры, к которому будет прилегать фаска. В командной строке появится запрос<b> Выберите второй отрезок или нажмите клавишу Shift при выборе, чтобы создать угол, или [Расстояние Угол Метод]: (Select second line or Shift-select to apply corner or [Distance Angle Method]:)</b>.</p>
     <p>16. Щелкните мышью на втором отрезке фигуры. Фаска построена.</p>
     <p>&nbsp;</p>
     <p>Итак, фаска может быть построена по длине двух отрезков или по длине одного отрезка и прилегающему углу.</p>
     <p>Остальные опции позволяют изменить параметры построения фаски.</p>
     <p>&nbsp;</p>
     <p> </p>
    <center><a href="8-2.php">◄ Предыдущая</a>&nbsp;&nbsp;&nbsp;<a href="8-4.php"> Следующая ►</a></center>
    
     <p>&nbsp;</p>
</body>
</html>
