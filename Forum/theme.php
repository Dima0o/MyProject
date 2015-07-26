<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<link rel="stylesheet" type="text/css" href="style.css">
<title>ТЕМЫ</title>
<script src="Script2.js">     </script>
</head>
<body>
  <center>
<a class="new" href="theme.php">Темы   </a>     <br />
<a href="new_table.php"><button class="but_new">Добавить новую</button></a>  <br />  <br />
<h3>На данный момент существуют следующие темы:</h3>
 <br /><br /><br /><br /><br />
<?php
$connect =mysql_connect("localhost","root","");   //Подключеение к MYSQL
$db =mysql_select_db("forum_base");
// подключение к БД
mysql_set_charset("utf8");
if(!$connect||$db) {
mysql_error(); }                //сообщение при ошибке

$result=
mysql_query("SELECT*FROM thems");
mysql_close();     // Закрытие соединения

while($mass=mysql_fetch_array($result)){ //Добавление массив для вывода всех ячеек
  ?>
  <a class="table_a" href='<?php  echo $mass['category']; //Вывод поля автора ?>.php'><?php  echo $mass['category'].'   '; //Вывод поля автора ?></a>
 <p class="table_p"><?php  echo $mass['atributes'].'<br>'; ?></p> <hr>
 <?php  } ?>
  </center>
 </body>
</html>