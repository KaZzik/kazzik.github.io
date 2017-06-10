<?php
$dbHost='localhost';// чаще всего это так, но иногда требуется прописать ip адрес базы данных
$dbName='tst';// название вашей базы
$dbUser='root';// пользователь базы данных
$dbPass='';// пароль пользователя

$db = mysql_connect($dbHost,$dbUser,$dbPass);
mysql_select_db($dbName,$db);

  //  $db = mysqli_connect ("localhost","root","");
   // mysql_select_db ("tst",$db);
    ?>