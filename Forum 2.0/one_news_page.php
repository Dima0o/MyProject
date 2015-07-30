<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
          <html xmlns="http://www.w3.org/1999/xhtml">
   
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<link rel="stylesheet" type="text/css" href="http://localhost/MyProject/style.css">
<title>NINE</title>
<script src="http://localhost/MyProject/Script2.js">

</script>
</head>
<body>
  <?php
  include 'header.php';
  include 'menu.php';  ?>

<div class="content">

<?php

     $fd= ($_GET["id"]);  //записываем в $fd глобальную переменную id

           $host="localhost";
    $user="kostya";
    $pass="kostya3397";
    $db_name="db_test";
    $table_name="my_news";

         include 'db_connect.php';         //подключение к БД

          $result= mysql_query("SELECT * FROM  $table_name WHERE id=$fd"); //делаем выборку по условию
          $mass=mysql_fetch_array($result);   //ИЗУЧИТЬ
?>
    <p class="news_one_theme">  <?php     echo $mass['name_news'];?>   <br />  </p>
    <p class="news_one_date">  <?php     echo $mass['date_news'];?>   <br />  </p>
    <p class="news_one_autor">   <?php  echo $mass['autor'];     ?>    <br /> </p>
    <p class="news_one_text"> Автор:  <?php    echo $mass['text_news']; ?>  <br /></p>
       </div>

 <?php
   include 'footer.php';
  ?>
</body>
</html>