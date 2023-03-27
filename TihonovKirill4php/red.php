  <?php
  
        $con = mysqli_connect("localhost","root","","fitnes_tihonov");

        $sql_query = "select id_users,surname,name,patronymic,photo,phone,awards from users where role=3";
        
        $result = mysqli_query($con,$sql_query); //выполняет sql запрос к базе данных
       
        $first_id = mysqli_fetch_array(mysqli_query($con, "select id_users from users where role=3 limit 1")); //передаёт полученные данные в массив

        $trener_id = !empty($_GET['trener'])?$_GET['trener']:$first_id["id_users"];
        
        $trener_info = mysqli_fetch_array(mysqli_query($con,"select * from users where id_users=$trener_id"));
    
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
         <h1>Привет и попал</h1>
   </div>
   <nav>
       <a class="" href="index.php">Главная</a>
       <a class="" href="">Наша команда</a>
       <a class="" href="">Добавить тренера</a>
       <a class="" href="">Отредактировать/удалить</a>
   </nav>
    </header> -->
    <div class="flex">
      <div class="list-trainer">
           <?php
                  while($trener = mysqli_fetch_array($result)){
           
           ?>
           <div class="trener-item">
            <p class="p1"><?=$trener['surname']. " " . $trener["name"]. " " . $trener["patronymic"]?></p>
            <p>
              <a class ="" href="?trener=<?=$trener['id_users'];?>"> <button class="btn btn-edit">Редактировать</button>
              </a>
              <a class ="" href="/del.php?trener=<?=$trener['id_users'];?>">
              <button class="btn btn-delete">Удалить</button>
              </a>
            </p>
           </div>
           <?php
                  }
                  ?>
    </div>
      
  
  <div class="form1">
 
  <h1>Редактирование информации</h1> 
  <img src="img/<?=$trener_info["photo"];?>" alt="<?$trener_info["name"];?>" class="photo1">
    <form action="" method="POST" class="form1" enctype="multipart/form-data">
    <input type="text" name="id_trener" value="<?=$trener_id;?>" style="display: none;">
              <div  class="input-group"><label for="">Фамилия</label><input value="<?=$trener_info["surname"]; ?>" required name="surname" type="text" ></div>
              <div  class="input-group"><label for="">Имя</label><input value="<?=$trener_info["name"]; ?>"  required name="name" type="text" id="name"></div>
              <div class="input-group"><label for="">Отчество</label><input value="<?=$trener_info["patronymic"]; ?>" name="patronymic" type="text" id="patronymic"></div>
              <div class="input-group"><label for="">Телефон</label><input value="<?=$trener_info["phone"]; ?>" required name="phone" type="text" id="phone"></div>
              <div class="input-group"><label for="">Пароль</label><input value="<?=$trener_info["password"]; ?>" required name="password" type="text" id="password"></div>
              <div class="input-group"><label for="">Дата рождения</label><input   required name="birthday" value="<?=$trener_info["birthday"]; ?>" type="date" id="birthday" ></div>
              <div class="input-group"><label for="">Фото</label><input value="<?=$trener_info["photo"]; ?>" name="photo"  type="file" id="photo" enctype="multipart/form-data"></div>
              <label for="#" style="margin:5px;">Выберите пол</label>
              <div class="input-group i-g-radio">
                <label for="g-m">М</label><input name="gender" id="g-m" type="radio"  value= "М" <?=($trener_info["gender"]=="М")?"checked":"";?>>
                    <label for="g-w">
                <label for="g-w">Ж</label><input name="gender" id="g-w" type="radio" value="Ж" <?=($trener_info["gender"]=="Ж")?"checked":"";?>>
            </div>
             
              <div class="input-group"><label for="">Награды</label><input value="<?=$trener_info["awards"]; ?>" name="awards" type="text" id="awards"></div>
              <div class="input-group"><input type="submit" value="редактировать"></div>
            </form>
        </div>
        </div>
</body>
</html>

<?php

if(!empty($_FILES["photo"]["tmp_name"])){
  $name1= "img/" . $_FILES["photo"]["name"];
  $name2= $_FILES["photo"]["name"];
  $trener_id=$_POST["id_trener"];
  $query="UPDATE users SET photo='$name2' where id_users=$trener_id"  ;
  $result_photo= mysqli_query($con, $query);
  if($result_photo)
  {
          move_uploaded_file($_FILES["photo"]["tmp_name"], $name1);
  }
}

if(!empty($_POST)) { 

$surname = $_POST["surname"];
$name = $_POST["name"];
$patronymic = !empty($_POST["patronymic"]) ? $_POST["patronymic"] : "null"; 
$birthday = $_POST["birthday"];
$phone =  $_POST["phone"];
$gender = $_POST["gender"];
$photo = $_FILES["photo"];
$pass = $_POST["password"];
$awards = !empty($_POST["awards"]) ? $_POST["awards"] : "-";



$query = "UPDATE users SET surname = '$surname', name = '$name', patronymic = '$patronymic',
 phone = '$phone', password = '$pass', birthday = '$birthday',  awards = '$awards' WHERE id_users = '$trener_id'";

$result1=mysqli_query($con,$query);
print_r($result1);

// if($result1) {
//     echo "<script>alert('запись редактированна'); location.href='/';</script>";
// } else {
//     echo "<script>alert('Ошибка добавление')</script>";
//     echo mysqli_error($con);
//     echo "<br>",$query;
// }
}
?>