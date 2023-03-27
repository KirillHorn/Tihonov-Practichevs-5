<?php
$con = mysqli_connect("localhost","root","","fitnes_tihonov"); //подключение базы данных. синтаксис: mysqli_connect ("адрес сервера","имя пользователя","пароль","название таблицы")

$sql_query= "select user_id,surname, name, patronymic from users where role=1";   //строки к которым мы хотим обратиться

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
    <div class="contair">
        <h1>Регестрация</h1>
    <form action="registritorDB.php" method="POST" enctype="multipart/form-data">
              <div  class="input-group"><label for="">Фамилия</label><input required name="surname" type="text"></div>
              <div  class="input-group"><label for="">Имя</label><input required name="name" type="text"></div>
              <div class="input-group"><label for="">Отчество</label><input name="patronymic" type="text"></div>
              <div class="input-group"><label for="">Телефон</label><input required name="phone"type="text"></div>
              <div class="input-group"><label for="">Пароль</label><input required name="password" type="text"></div>
              <div class="input-group"><label for="">Подвердите пароль</label><input required name="password2" type="text"></div>
              <div class="input-group"><label for="">Дата рождения</label><input required name="birthday" type="date"></div>
              <label for="#" style="margin:5px;">Выберите пол</label>
              <div class="input-group i-g-radio">
                <label for="g-m">М</label><input name="gender" id="g-m" type="radio" checked value="М">
                <label for="g-w">Ж</label><input name="gender" id="g-w" type="radio" value="Ж">
            </div>
              <div class="input-group"><input type="submit" value="Регестрация"></div>
            </form>
        </div>
        <script>
          let confirm_pass=;
        </script>
</body>