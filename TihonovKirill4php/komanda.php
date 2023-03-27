  <?php
        $con = mysqli_connect("localhost","root","","fitnes_tihonov");

        $sql_query = "select surname,name,patronymic,photo,phone,awards from users where role=3";

        $result = mysqli_query($con,$sql_query);
       
        ?>
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
    <title>Redm</title>
</head>
<body>
<?php
  include("header.html")
  ?>
<!-- <body>
  <header>
   <div class="logo">
         <h1>Привет и Попал</h1>
   </div>
   <nav>
       <a class="">Главная</a>
       <a class="">Наша команда</a>
       <a class="">Добавить тренера</a>
       <a class="">Отредактировать/удалить</a>
   </nav>
    </header> -->
    <form action="">
              <div class="input-group"><label form=""></label><input type="text"></div>
              <div class="input-group"><label form=""></label><input type="text"></div>
              <div class="input-group"><label form=""></label><input type="text"></div>
              <div class="input-group"><label form=""></label><input type="text"></div>
              <div class="input-group"><label form=""></label><input type="text"></div>
              <div class="input-group"><label form=""></label><input type="text"></div>
              <div class="input-group"><label form=""></label><input type="text"></div>
              <div class="input-group"><label form=""></label><input type="text"></div>
              <div class="input-group"><label form=""></label><input type="text"></div>
              <div class="input-group"><label form=""></label><input type="text"></div>
            </form>
</body>
</html>