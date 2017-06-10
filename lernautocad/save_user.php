<!DOCTYPE html>
    <html>
    <head>
    <meta charset="utf-8" lang="ru">
    <link rel="stylesheet" type="text/css" href="content\css\1.css">
    <title>Главная страница</title>
    </head>
    <body>
    <div id="l1"><img src="content\images\autocad-u150-fr.png"></div>  
    <div id="head"><p>Электронное учебное пособие по программе AutoCAD</p></div>

    <div class="content1">
<?php
    if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
    if (isset($_POST['mail'])) { $mail=$_POST['mail']; if ($mail =='') { unset($mail);} }
    if (isset($_POST['grup'])) { $grup=$_POST['grup']; if ($grup =='') { unset($grup);} }
    if (isset($_POST['fam'])) { $fam=$_POST['fam']; if ($fam =='') { unset($fam);} }
    if (isset($_POST['imja'])) { $imja=$_POST['imja']; if ($imja =='') { unset($imja);} }
    if (isset($_POST['otch'])) { $otch=$_POST['otch']; if ($otch =='') { unset($otch);} }
    //заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
if (empty($login) && empty($password) && empty($mail) && empty($grup) && empty($fam) && empty($imja) && empty($otch)) //если пользователь не ввел значения, то выдаем ошибку и останавливаем скрипт
    {
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
        }
    //если логин и пароль введены, то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
    $password = stripslashes($password);
    $password = htmlspecialchars($password);
    $mail = stripslashes($mail);
    $mail = htmlspecialchars($mail);
    $fam = stripslashes($fam);
    $fam = htmlspecialchars($fam);
    $grup = stripslashes($grup);
    $grup = htmlspecialchars($grup);
    $imja = stripslashes($imja);
    $imja = htmlspecialchars($imja);
    $otch = stripslashes($otch);
    $otch = htmlspecialchars($otch);
 //удаляем лишние пробелы
    $login = trim($login);
    $password = trim($password);
    $mail = trim($mail);
    $fam = trim($fam);
    $imja = trim($imja);
    $grup = trim($grup);
    $otch = trim($otch);
   // подключаемся к базе
    include ("bd.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь 
 // проверка на существование пользователя с таким же логином
    $result = mysql_query("SELECT id FROM users WHERE login='$login'",$db);
    $myrow = mysql_fetch_array($result);
    if (!empty($myrow['id'])) {
    exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
    }
 // если такого нет, то сохраняем данные
    $result2 = mysql_query ("INSERT INTO users (login,password,mail,grup,fam,imja,otch) VALUES('$login','$password','$mail','$grup','$fam','$imja','$otch')");
    // Проверяем, есть ли ошибки
    if ($result2=='TRUE')
    {
    echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <a href='index.php'>Главная страница</a>";
    }
 else {
    echo "Ошибка! Вы не зарегистрированы.";
    }
    ?> </div></body></html>