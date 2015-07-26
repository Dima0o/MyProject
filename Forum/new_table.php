<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
          <html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Создать тему</title>
<script src="Script2.js">     </script>
</head>
<body>
<center>
<a class="new" href="theme.php">Темы   </a>
  <form action="" method="post">
<br />Название темы:<br /><p class="sorry">К сожалению только латиница и только одно слово</p><input class="name_table" type="text" name="name_table" required autofocus/>   <br>
<br />Описание темы:<br><textarea style="margin: 0px;   height: 156px;     width: 648px;" type="text" name="atr_table" required/></textarea>   <br>
<br><input type="submit" name="add" value="Добавить"/>   <br>
</form>
 <?php
 $connect=mysql_connect("localhost","root","");   //Подключеение к MYSQL
$bb=mysql_select_db("forum_base");   // подключение к БД
mysql_set_charset("utf8");
if(!$connect||$bb) {
mysql_error(); }

if(isset($_POST['add'])){
  $name_table=strip_tags(trim($_POST['name_table']));
  $atr_table=strip_tags(trim($_POST['atr_table']));
 $sql='
 CREATE Table '.$name_table.'
(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    autor TEXT(200) NOT NULL,
    text TEXT(200) NOT NULL,
        email TEXT(200) NOT NULL
)';

copy('chat.php', "$name_table.php");
$line=26;
$replace="mysql_query('SELECT*FROM $name_table');";
$filename = "$name_table.php";

$file = file($filename);
$file[$line-1] = $replace.PHP_EOL;
file_put_contents($filename, join('', $file));

$line=64;
$replace="$name_table( text,autor,email)  ";
$filename = "$name_table.php";

$file = file($filename);
$file[$line-1] = $replace.PHP_EOL;
file_put_contents($filename, join('', $file));

$line=15;
$replace="$atr_table";
$filename = "$name_table.php";

$file = file($filename);
$file[$line-1] = $replace.PHP_EOL;
file_put_contents($filename, join('', $file));

$line=12;
$replace="$name_table";
$filename = "$name_table.php";

$file = file($filename);
$file[$line-1] = $replace.PHP_EOL;
file_put_contents($filename, join('', $file));

$connect=mysql_connect("localhost","root","");   //Подключеение к MYSQL
$db=mysql_select_db("forum_base");

mysql_set_charset("utf8");
if(!$connect||$db) {
mysql_error(); }

if(isset($_POST['add'])||isset($_POST['text'])){

mysql_query("INSERT INTO
thems( category,atributes)
            VALUES('$name_table','$atr_table')");
}

 if(!mysql_query($sql))
 {echo '<center><p><b>Ошибка при создании таблицы!</b></p></center>';}
 //Строку, расположенную ниже, после отладки удалить
 else {echo '<center><p><b>Тема создана!</b></p></center>';}
}

?>
</center>
 </body>
</html>