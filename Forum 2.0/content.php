<div class="content">


<?php
    $host="localhost";
    $user="kostya";
    $pass="kostya3397";
    $db_name="db_test";
    $table_name="my_news";

         include 'db_connect.php';         //подключение к БД
               include 'db_view.php';         //подключаем файл выборки

         while($mass=mysql_fetch_array($result)){ //Добавление массив для вывода всех ячеек
  ?>
    <table class="news">
      <tr>
        <td lass="news_news_td">
          <h3 class="news_news"> <?php  echo $mass['name_news'];?>          </h3>
      </td>
      </tr>
      <tr>
        <td class="news_autor_td">
           <h3 class="news_autor">Автор:   <?php  echo $mass['autor'];?>   </h3>
        </td>
      </tr>
      <tr>
        <td class="news_text_td">
         <h3 class="news_text">       <?php  echo $mass['text_news'];?> </h3>
        </td>
      </tr>
      <tr>
        <td class="news_date_td">
         <h3 class="news_date">    Дата: <?php  echo $mass['date_news'];?>  </h3>

          <?php
              echo '<a href="one_news_page.php/?id='.$mass['id'].'">Подробнее...</a>';
        ?>

        </td>
      </tr>
    </table>

 <?php  } ?>







</div>