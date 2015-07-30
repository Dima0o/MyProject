<?php
/*$host="";
$user="";
$pass="";
$db_name="";
$table_name=""*/
$connect =mysql_connect($host, $user, $pass);   //Подключеение к MYSQL
$db =mysql_select_db($db_name);
mysql_set_charset("utf8");
if(!$connect||$db) {
mysql_error(); }                //сообщение при ошибке
  ?>