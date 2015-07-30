<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<link rel="stylesheet" type="text/css" href="style.css">
<title>JAVA TEST</title>
<script src="Script2.js">     </script>
</head>  <body> <center>
 <a class="new" href="theme.php">Чат  </a> <br /><br /><br /><br />
 Название темы:<br /><h2 class="table_a2">
ww
  </h2>
  Описание темы:<h2 class="table_p2">
Лиля
Ахренеть
15:17:37	

Константин
ну как бы да
15:17:54	

Лиля
Пздц..
 </h2>
<?php
$connect =mysql_connect("localhost","root","");   //Подключеение к MYSQL
$db =mysql_select_db("forum_base");
// подключение к БД
mysql_set_charset("utf8");
if(!$connect||$db) {
mysql_error(); }                //сообщение при ошибке

$result=
mysql_query('SELECT*FROM ww');
mysql_close();     // Закрытие соединения

while($mass=mysql_fetch_array($result)){ //Добавление массив для вывода всех ячеек
  ?>
  <h3><?php  echo $mass['autor'].'   '; //Вывод поля автора ?></h3>
 <p><?php  echo $mass['text'].'<br>'; ?></p> <hr>

 <?php  }
  $text=strip_tags(trim($_POST['text']));        //запись ввденных данных в переменные
$autor=strip_tags(trim($_POST['autor']));
$email=strip_tags(trim($_POST['e-mail']));
 echo('<h3>'.$autor.'</h3>');
echo('<p>'.$text.'</p><hr>');

 ?>
  <form action="" method="post">
Имя автора <br><input type="text" name="autor"/> <br>
Текст<br><input type="text" name="text"/>   <br>
Ваш E-mail<br><input type="email" name="e-mail" required="required"/>   <br>
<br><input type="submit" name="add" value="Добавить комментарий"/>   <br>

</form>

<?php
 $connect=mysql_connect("localhost","root","");   //Подключеение к MYSQL
$db=mysql_select_db("forum_base");

mysql_set_charset("utf8");
if(!$connect||$db) {
mysql_error(); }




if(isset($_POST['add'])||isset($_POST['text'])){

mysql_query("INSERT INTO
ww( text,autor,email)  
            VALUES('$text','$autor','$email')");


    }
else{

}
?>
    </center>
 </body>
</html>