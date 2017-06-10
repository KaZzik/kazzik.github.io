<<<<<<< HEAD

<?php
    session_start();//  вся процедура работает на сессиях. Именно в ней хранятся данные  пользователя, пока он находится на сайте. Очень важно запустить их в  самом начале странички!!!
if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} }
if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
if (isset($_POST['mail'])) { $mail = $_POST['mail']; if ($mail == '') { unset($mail);} }
if (isset($_POST['grup'])) { $grup=$_POST['grup']; if ($grup =='') { unset($grup);} }
if (isset($_POST['fam'])) { $fam = $_POST['fam']; if ($fam == '') { unset($fam);} }
if (isset($_POST['imja'])) { $imja=$_POST['imja']; if ($imja =='') { unset($imja);} }
if (isset($_POST['otch'])) { $otch = $_POST['otch']; if ($otch == '') { unset($otch);} }
?>
<!DOCTYPE html>
    <html>
    <head>
    <meta charset="utf-8" lang="ru">
    <link rel="stylesheet" type="text/css" href="content\css\1.css">
    <title>Главная страница</title>
    </head>
    <body>
    
    <div id="head"><p>Электронное учебное пособие по программе AutoCAD</p></div>

    <div class="content1">

<?php
if (empty($login) && empty($password) && empty($mail) && empty($grup) && empty($fam) && empty($imja) && empty($otch)) //если пользователь не ввел значения, то выдаем ошибку и останавливаем скрипт
    {
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }
    //если логин и пароль введены,то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
    $password = stripslashes($password);
    $password = htmlspecialchars($password);
    $mail = stripslashes($mail);
    $mail = htmlspecialchars($mail);
    $grup = stripslashes($grup);
    $grup = htmlspecialchars($grup);
    $fam = stripslashes($fam);
    $fam = htmlspecialchars($fam);
    $imja = stripslashes($imja);
    $imja = htmlspecialchars($imja);
    $otch = stripslashes($otch);
    $otch = htmlspecialchars($otch);
//удаляем лишние пробелы
    $login = trim($login);
    $password = trim($password);
    $mail = trim($mail);
    $password = trim($password);
    $grup = trim($grup);
    $fam = trim($fam);
    $imja = trim($imja);
    $otch = trim($otch);
// подключаемся к базе
    include ("bd.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь 
 
$result = mysql_query("SELECT * FROM users WHERE login='$login'",$db); //извлекаем из базы все данные о пользователе с введенным логином
    $myrow = mysql_fetch_array($result);
    if (empty($myrow['password']))
    {
    //если пользователя с введенным логином не существует
    exit ("Извините, введённый вами login или пароль неверный.");
    }
    else {
    //если существует, то сверяем пароли
    if ($myrow['password']==$password) {
    //если пароли совпадают, то запускаем пользователю сессию! Можете его поздравить, он вошел!
    $_SESSION['login']=$myrow['login']; 
    $_SESSION['id']=$myrow['id'];
    $_SESSION['mail']=$myrow['mail'];
    $_SESSION['grup']=$myrow['grup'];
    $_SESSION['fam']=$myrow['fam'];
    $_SESSION['imja']=$myrow['imja'];
    $_SESSION['otch']=$myrow['otch'];
    //эти данные очень часто используются, вот их и будет "носить с собой" вошедший пользователь
    echo "Вы успешно вошли на сайт! <a href='index.php'>Главная страница</a>";
    }
 else {
    //если пароли не сошлись

    exit ("Извините, введённый вами login или пароль неверный.");
    }
    }
=======

<?php
    session_start();//  вся процедура работает на сессиях. Именно в ней хранятся данные  пользователя, пока он находится на сайте. Очень важно запустить их в  самом начале странички!!!
if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} }
if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
if (isset($_POST['mail'])) { $mail = $_POST['mail']; if ($mail == '') { unset($mail);} }
if (isset($_POST['grup'])) { $grup=$_POST['grup']; if ($grup =='') { unset($grup);} }
if (isset($_POST['fam'])) { $fam = $_POST['fam']; if ($fam == '') { unset($fam);} }
if (isset($_POST['imja'])) { $imja=$_POST['imja']; if ($imja =='') { unset($imja);} }
if (isset($_POST['otch'])) { $otch = $_POST['otch']; if ($otch == '') { unset($otch);} }
?>
<!DOCTYPE html>
    <html>
    <head>
    <meta charset="utf-8" lang="ru">
    <link rel="stylesheet" type="text/css" href="content\css\1.css">
    <title>Главная страница</title>
    </head>
    <body>
    
    <div id="head"><p>Электронное учебное пособие по программе AutoCAD</p></div>

    <div class="content1">

<?php
if (empty($login) && empty($password) && empty($mail) && empty($grup) && empty($fam) && empty($imja) && empty($otch)) //если пользователь не ввел значения, то выдаем ошибку и останавливаем скрипт
    {
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }
    //если логин и пароль введены,то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
    $password = stripslashes($password);
    $password = htmlspecialchars($password);
    $mail = stripslashes($mail);
    $mail = htmlspecialchars($mail);
    $grup = stripslashes($grup);
    $grup = htmlspecialchars($grup);
    $fam = stripslashes($fam);
    $fam = htmlspecialchars($fam);
    $imja = stripslashes($imja);
    $imja = htmlspecialchars($imja);
    $otch = stripslashes($otch);
    $otch = htmlspecialchars($otch);
//удаляем лишние пробелы
    $login = trim($login);
    $password = trim($password);
    $mail = trim($mail);
    $password = trim($password);
    $grup = trim($grup);
    $fam = trim($fam);
    $imja = trim($imja);
    $otch = trim($otch);
// подключаемся к базе
    include ("bd.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь 
 
$result = mysql_query("SELECT * FROM users WHERE login='$login'",$db); //извлекаем из базы все данные о пользователе с введенным логином
    $myrow = mysql_fetch_array($result);
    if (empty($myrow['password']))
    {
    //если пользователя с введенным логином не существует
    exit ("Извините, введённый вами login или пароль неверный.");
    }
    else {
    //если существует, то сверяем пароли
    if ($myrow['password']==$password) {
    //если пароли совпадают, то запускаем пользователю сессию! Можете его поздравить, он вошел!
    $_SESSION['login']=$myrow['login']; 
    $_SESSION['id']=$myrow['id'];
    $_SESSION['mail']=$myrow['mail'];
    $_SESSION['grup']=$myrow['grup'];
    $_SESSION['fam']=$myrow['fam'];
    $_SESSION['imja']=$myrow['imja'];
    $_SESSION['otch']=$myrow['otch'];
    //эти данные очень часто используются, вот их и будет "носить с собой" вошедший пользователь
    echo "Вы успешно вошли на сайт! <a href='index.php'>Главная страница</a>";
    }
 else {
    //если пароли не сошлись

    exit ("Извините, введённый вами login или пароль неверный.");
    }
    }
>>>>>>> d146ca0fddb126a0a47e430714ddddabea58ad99
    ?></div></body></html>