<?php
    //  вся процедура работает на сессиях. Именно в ней хранятся данные  пользователя, пока он находится на сайте. Очень важно запустить их в  самом начале странички!!!
    session_start();
    ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" lang="ru">
<link rel="stylesheet" type="text/css" href="css\1.css">
  <title>Построение дуги</title>
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
(многоугольников, окружностей, дуг, эллипсов)</b></p><br><br><br><br>

  <p align="center"><b>Построение дуги</b></p>
     <p>&nbsp;</p>
     <p>Дуга — это геометрическая фигура, которая представляет собой часть окружности.</p>
     <p>Как известно, дуга имеет начальную точку А и конечную точку Б, строится относительно центра дуги О. Расстояние от центра О до любой из точек дуги называется радиусом R, начальную и конечную точки А и Б связывает хорда. При построении можно воспользоваться значением внутреннего угла дуги (угол разворота).</p>
     <p>По умолчанию направление построения дуги — против часовой стрелки.</p><br><br>
    <p align="center"> <img src="images\image007.jpg"></p>
     <p>Команда&nbsp; <b>Дуга</b>&nbsp; вызывается:</p>
     <p>1) из меню <b>Рисование ► Дуга</b></p>
     <p>2) щелчок по пиктограмме&nbsp; <img src="images\3.jpg">&nbsp; панели инструментов <b>Рисование</b></p>
     <p>3) ввод команды <b>Дуга</b> в командную строку</p>
     <p>&nbsp;</p>
     <p>&nbsp;</p>
     <p align="center"><b>Фигура Дуга может быть построена несколькими способами.</b></p>
     <p>&nbsp;</p>
     <p align="center"><img src="images\image003.jpg"</p>
     <p><u>По трем точкам (рис. А)</u></p>
     <p>После выбора из открывающегося списка <b>Дуга</b> команды <b>3 точки</b>&nbsp; или ввода в командную строку команды <b>Дуга</b>&nbsp; выберите три точки a, b и с, через которые пройдет дуга. Первая точка <b>а</b> и последняя точка с служат конечными точками дуги, а промежуточная точка b служит для задания изгиба. При построении следует последовательно указать мышью три эти точки: a, b и с.</p>
     <p>Следует заметить, при вводе команды <b>Дуга</b> метод построения по трем точкам выбирается автоматически как наиболее простой вариант построения дуги.</p>
     <p>&nbsp;</p>
     <p><u>Начало, конец, центр (рис. Б)</u></p>
     <p>Чтобы построить такую фигуру, следует из открывающегося списка <b>Дуга</b> группы элементов управления <b>Рисование</b> ленты <b>Главная</b> выбрать строку <b>Начало, конец, центр</b> и последовательно щелкнуть мышью на первой конечной точке а или b, точке, обозначающей центр дуги О и второй конечной точке b или а.</p>
     <p>Дуга строится против часовой стрелки от начальной точки. От выбора начальной и конечной точек зависит расположение создаваемой фигуры.</p>
     <p>&nbsp;</p>
     <p><u>Начало, центр, угол (рис. В)</u></p>
     <p>Для построения дуги таким методом следует из открывающегося списка Дуга группы элементов управления <b>Рисование</b> ленты <b>Главная</b> выбрать строку <b>Начало, центр, угол</b> и последовательно щелкнуть мышью на первой точке а, точке, обозначающей центр дуги О, после чего ввести в командную строку значение угла и нажать клавишу <b>Enter</b>.</p>
     <p>&nbsp;</p>
     <p>Дуга строится против часовой стрелки от начальной точки. От выбора начальной и конечной точек зависит расположение создаваемой фигуры.</p>
     <p>&nbsp;</p>
     <p><u>Начало, центр, длина (рис. Г)</u></p>
     <p>Здесь дуга строится по начальной точке а, центру О и длине хорды bа (хорда на рисунке обозначена синим цветом). Для построения этим методом следует выбрать из открывающегося списка <b>Дуга</b> строку <b>Начало, центр, длина,</b> щелкнуть мышью на начальной точке а, далее щелкнуть мышью на центре строящейся дуги О, ввести с клавиатуры значение длины хорды и нажать клавишу <b>Enter</b>.</p>
     <p>&nbsp;</p>
     <p><u>Начало, конец, угол (рис. Д)</u></p>
     <p>При этом построении следует указать начальную точку дуги а, конечную точку дуги b, после чего ввести с клавиатуры значение угла, на который разворачивается дуга. Центр дуги указывать не требуется.</p>
     <p>&nbsp;</p>
     <p><u>Начало, конец, направление (рис. Е)</u></p>
     <p>В этом варианте известны начальная и конечная точки <b>а</b> и<b> b</b> и направление построения дуги.</p>
     <p>&nbsp;</p>
     <p>Здесь известны начальная и конечная точки <b>а</b> и <b>b</b> и значение радиуса, но центр окружности неизвестен или вынесен за пределы чертежа. Щелкните мышью на начальной точке <b>а</b> дуги, далее — на конечной точке b дуги, введите с клавиатуры значение радиуса и нажмите клавишу <b>Enter</b>. Частный случай такого построения; если известен центр окружности, но неизвестно значение радиуса, следует последовательно щелкнуть мышью на начальной точке <b>а</b>, конечной точке <b>b</b> и точке <b>О</b> — центре окружности.</p>
     <p>И еще один важный момент: если выбирать начальную и конечную точки справа налево, дуга получится выгнутой, слева направо — вогнутой .</p>
     <p>&nbsp;</p>
     <p>Построение ведется по центру окружности, начальной и конечной точке дуги. Чтобы построить фигуру, следует сначала щелкнуть мышью на центре <b>О </b>дуги, затем на начальной точке <b>а</b>, после — на конечной точке <b>b</b>. Особенности построения — выбор начальной <b>а</b> и конечной <b>b</b> точки дуги (направления построения). Если выполнять построение справа налево, по точкам <b>О</b>, <b>а</b>, затем <b>b</b> — против часовой стрелки, дуга получится выгнутой. При выполнении построения слева направо дуга получится вогнутой.</p>
     <p>&nbsp;</p>
     <p>Построение по центральной точке дуги, начальной точке и внутреннему углу. Расстоянием между центром дуги и начальной точкой является радиус <b>R</b>. Для построения следует задать координаты начальной точки <b>О</b> (выбрать мышью), задать координаты начальной точки <b>а</b> дуги (ввести координаты или указать мышью), после чего ввести с клавиатуры значение внутреннего угла и нажать клавишу <b>Enter</b>.</p>
     <p>&nbsp;</p>
     <p>Фигура строится по центральной точке <b>О</b>, начальной точке <b>а</b> и длине хорды. Радиус определяется расстоянием от центральной точки <b>О</b> до начальной точки дуги <b>а</b>. Для построения следует ввести (или выбрать мышью) координаты начальной точки <b>О</b>, начальной точки дуги <b>а</b>, после чего ввести с клавиатуры значение внутреннего угла и нажать клавишу <b>Enter</b>. Дуга строится против часовой стрелки от начальной точки <b>а</b>.</p>
      <p>&nbsp;</p>
     <p>Этот вариант построения удобен тем, что оно ведется от конечной точки фигуры, которая была построена последней. Начальная точка дуги находится в конечной точке построенной фигуры, а конечная точка дуги привязана к прицелу указателя мыши. Начальная и конечная точка дуги в процессе построения связаны хордой.</p>
      <p>&nbsp;</p>
     <p align="center"><i>Пример построения Дуги по трем точкам</i></p>
     <p>&nbsp;</p>
     <p>Для того, чтобы построить дугу по трем точкам, выполните следующие действия.</p>
     <p>1. Введите в командную строку команду <b>ДУГА</b> и нажмите клавишу <b>Enter</b>. В командной строке появится запрос: <b>Начальная точка дуги или [Центр]: </b>.</p>
     <p>2. Введите координаты начальной точки дуги и нажмите клавишу <b>Enter</b> или выберите эту точку на чертеже мышью. После ввода координат на экране появится запрос: <b>Вторая точка дуги или [Центр Конец]:</b> .</p>
     <p>3. Введите координаты второй точки дуги и нажмите клавишу <b>Enter</b>. На экране появится запрос на ввод координат конечной точки.</p>
     <p>4. Введите запрашиваемые данные и нажмите клавишу <b>Enter</b>. Дуга построена.</p>
     <p>&nbsp;</p>
     <p align="center"><i>Пример построения Дуги по начальной точке, центральной точке и внутреннему углу</i></p>
     <p>&nbsp;</p>
     <p>Построение <b>Дуги</b> по начальной точке, центральной точке и внутреннему углу выполняется с помощью выбора опций из командной строки.</p>
     <p>1. Введите команду <b>ДУГА</b> и нажмите клавишу <b>Enter</b>. В командной строке появится запрос: <b>Начальная точка дуги или [Центр]:</b> .</p>
     <p>2. Введите координаты начальной точки и нажмите клавишу <b>Enter</b> или щелкните в выбранной точке мышью. В ответ в командной строке появится второй запрос: Вторая точка дуги или [Центр Конец]: .</p>
     <p>3. Выберите опцию <b>Центр</b>. Для этого достаточно нажать клавишу <b>Ц</b>, а затем <b>Enter</b>. В командной строке появится запрос: <b>Центр дуги:</b>.</p>
     <p>4. Введите координаты центра дуги и нажмите клавишу <b>Enter</b> или щелкните мышью на нужной точке чертежа. В ответ в командной строке появится следующий запрос: <b>Конечная точка дуги или [Угол Длина хорды]: </b>.</p>
     <p>5. Выберите опцию Угол. Для этого нажмите клавишу <b>У</b> и затем — клавишу <b>Enter</b>. В ответ в командной строке появится заключительный в данном построении запрос: <b>Центральный угол.</b></p>
     <p>6. Введите значение центрального угла и нажмите клавишу <b>Enter</b>. Дуга построена.</p>
     <p>&nbsp;</p>
     <p>Как видно из приведенных примеров, выполнить построение с помощью команд открывающегося списка <b>Дуга</b> гораздо удобнее, чем с помощью команд командной строки. Но выбор в каждом конкретном случае остается за вами.</p>
     <p>&nbsp;</p>
     <p> </p>
     <center><a href="3.php">◄ Предыдущая</a>&nbsp;&nbsp;&nbsp;<a href="3-3.php"> Следующая ►</a></center>   
     <p>&nbsp;</p>
    <p>&nbsp;</p></div></content>
</body>
</html>
