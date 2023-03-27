  <?php
        $con = mysqli_connect("localhost","root","","fitnes_tihonov"); //подключение базы данных. синтаксис: mysqli_connect ("адрес сервера","имя пользователя","пароль","название таблицы")

        $sql_query = "select surname,name,patronymic,photo,phone,awards from users where role=3"; //строки к которым мы хотим обратиться

        $result = mysqli_query($con,$sql_query); //выполняет запрос sql. mysqli_query(обращение к базе данных,запрос который нужно произвести)
       
      
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
  <!-- <header>
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
    <div class="contair">
        <h1>Добавление тренера</h1>
    <form action="/addtrenerDb.php" method="POST" enctype="multipart/form-data">
              <div  class="input-group"><label for="">Фамилия</label><input required name="surname" type="text"></div>
              <div  class="input-group"><label for="">Имя</label><input required name="name" type="text"></div>
              <div class="input-group"><label for="">Отчество</label><input name="patronymic" type="text"></div>
              <div class="input-group"><label for="">Телефон</label><input required name="phone"type="text"></div>
              <div class="input-group"><label for="">Пароль</label><input required name="password" type="text"></div>
              <div class="input-group"><label for="">Дата рождения</label><input required name="birthday" type="date"></div>
              <div class="input-group"><label for="">Фото</label><input name="photo" type="file"></div>
              <label for="#" style="margin:5px;">Выберите пол</label>
              <div class="input-group i-g-radio">
                <label for="g-m">М</label><input name="gender" id="g-m" type="radio" checked value="М">
                <label for="g-w">Ж</label><input name="gender" id="g-w" type="radio" value="Ж">
            </div>
             
              <div class="input-group"><label for="">Награды</label><input name="awards" type="text"></div>
              <div class="input-group"><input type="submit" value="добавить"></div>
            </form>
        </div>
</body>
</html>