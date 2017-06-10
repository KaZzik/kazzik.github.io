<?php
    //  вся процедура работает на сессиях. Именно в ней хранятся данные  пользователя, пока он находится на сайте. Очень важно запустить их в  самом начале странички!!!
    session_start();
    ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" lang="ru">
<link rel="stylesheet" type="text/css" href="css\1.css">
  <title>Построение эллипса</title>
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
      <p id="u254753-3" align="center"><b>Построение простых графических примитивов
(многоугольников, окружностей, дуг, эллипсов)</b></p><br><br>

    
     <p align="center"><b>Построение эллипса</b></p>
     <p>&nbsp;</p>
     <p>Эллипс характеризуется координатами центра и длинами большой и малой оси.</p>
     <p>Команда <b>Эллипс</b> вызывается следующими способами:</p>
     <p>1) из меню <b>Рисование ► Дуга</b></p>
     <p>2) щелчок по пиктограмме&nbsp;<img src="images\3.jpg">&nbsp; панели инструментов Рисование</p>
     <p>3) ввод команды <b>Дуга</b> в командную строку</p>
     <p>&nbsp;</p>
     <p>Фигуру <b>Эллипс</b> можно построить двумя способами:</p>
     <p>&nbsp;</p>
     <p align="center"><u>По центральной точке, конечной точке первой оси и длине второй оси</u></p>
     <p>При построении эллипса таким способом сначала выбирают точку, служащую центром фигуры, далее выбирают конечную точку первой оси, после чего указывают размер второй оси. Построение можно выполнить как с командной строки, так и отмечая требуемые точки мышью.</p>
     <p>&nbsp;</p>
     <br>
     <p align="center"><img src="images\image010.jpg"></p>
     <p align="center">&nbsp; Параметры эллипса</p>
     <p>&nbsp;</p>
     <p align="center"><u>По начальной и конечной точке первой оси и длине второй оси</u></p>
     <p>В этом случае следует последовательно указать координаты начальной и конечной точки первой оси эллипса, после чего ввести значение длины второй оси. Построение, как и в первом варианте, можно выполнить как с командной строки, так и выбирая требуемые точки мышью.</p>
     <p>&nbsp;</p>
     
     <p align="center">Эллиптическая дуга</p>
     <p>По аналогии с окружностью, где дуга — часть этой окружности, эллиптическая дуга — это часть эллипса.</p>
     <p>&nbsp;</p>
     <p align="center"><img src="images\image011.jpg"></p>
     <p align="center">Эллиптическая дуга</p>
     <br>
     <p>&nbsp;</p>
     <p>Построение Эллипса по координатам начальной и конечной точек одной оси и длины второй оси</p>
     <p>&nbsp;</p>
     <p>1. Введите в командную строку команду <b>Эллипс</b> и нажмите клавишу <b>Enter</b>. В командной строке появится запрос: <b>Конечная точка оси</b> эллипса или <b>[Дуга Центр]</b>: .</p>
     <p>2. Введите координаты начальной точки большой оси эллипса, например <b>500,100</b>. После этого нажмите клавишу <b>Enter</b>. В командной строке появится запрос: <b>Вторая конечная точка оси:</b> .</p>
     <p>3. Введите координаты второй конечной точки оси: <b>700,100</b> — и нажмите клавишу <b>Enter</b>. В командной строке появится запрос: <b>Длина другой оси или [Поворот]</b>: , а в графической зоне – эллипс, ограниченный размерами большой оси.</p>
     <p>4. Введите значение длины малой оси. Например, <b>50</b>. После этого нажмите клавишу <b>Enter</b>. Эллипс с размерами <b>200</b> мм по большой оси и <b>100</b> мм по малой оси построен.</p>
     <p>&nbsp;</p>
     <p ><i>При вводе значения длины большой или малой оси следует учесть: вводимое значение размера – это половинный размер.</i> Так, в примере в качестве размера малой оси мы ввели значение <b>50</b> мм. После построения мы получили длину малой оси, равную <b>100</b> мм.</p>
     <p><b>Обратите внимание:</b> выбрав опцию <b>Поворот</b>, вы сможете повернуть эллипс на требуемый угол.</p>
     <p>&nbsp;</p>
     <p align="center"><u>Построение эллипса по центральной точке</u></p>
     <p>&nbsp;</p>
     <p>5. Нажмите кнопку <b>Центр</b>&nbsp;<img src="images\4.jpg">&nbsp; из открывшегося списка <b>Эллипс</b> меню <b>Рисование</b>. В командной строке появится запрос, в ответ на который следует ввести координаты центра фигуры.</p>
     <p>6. Выберите точку, которая будет служить центром эллипса. Для этого щелкните мышью на требуемой точке в чертеже или введите ее координаты с клавиатуры, например <b>500,50</b>, и нажмите клавишу <b>Enter</b>. В командной строке появится следующий запрос: <b>Конечная точка оси</b>: .</p>
     <p>7. В ответ на появившийся запрос щелкните мышью на конечной точке будущей оси или введите ее координаты в командной строке. Например <b>600,70</b>. После ввода координат с клавиатуры нажмите клавишу <b>Enter</b>. В командной строке появится следующий запрос: <b>Длина другой оси или [Поворот]</b>: .</p>
     <p>8. 8. Введите с клавиатуры значение длины второй оси, например 25, и нажмите клавишу <b>Enter</b>. Эллипс построен.</p>
     <p>Обратите внимание: так как координаты для центра фигуры и конечной точки большой оси по координатной оси Y разные, эллипс получился наклонным.</p>
     <p>&nbsp;</p>
     <p align="center"><u>Построение эллиптической дуги</u></p>
     <p>&nbsp;</p>
     <p>При построении эллиптической дуги после ввода координат центра фигуры, конечной точки оси (или координат начальной и конечной точки оси) и длины второй оси потребуется указать два граничных угла — <b>начальный угол</b> и <b>конечный угол </b>(точка А и точка Б на рис. ниже). То есть сначала строится обычный эллипс, а затем указываются начальная и конечная точки угла. Здесь следует учесть — отсчет углов начинается от большей оси эллипса.</p>
     <p>&nbsp;</p>
     <p>&nbsp;</p>
     <p align="center"><img src="images\image011.jpg"></p>
     <p>&nbsp;</p>
     <p>&nbsp;</p>
     <center><a href="3-3.php">◄ Предыдущая</a>&nbsp;&nbsp;&nbsp;<a href="4-4.php"> Следующая ►</a></center>
      <p>&nbsp;</p></div></content>
</body>
</html>