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
  <!-- <header>
   <div class="logo">
         <h1>Привет и Попал</h1>
   </div>
   <nav>
       <a class="">Главная</a>
       <a class="">Наша команда</a>
       <a class="" href="addtrener.php">Добавить тренера</a>
       <a class="" href="red.php">Отредактировать/удалить</a>
   </nav>
    </header> -->
 
<div class="cards">
    <?php
        while($trener = mysqli_fetch_array($result)){ 
            ?>
            
                <div class="card">
                <div class="img_container">
                    <img src="/img/<?=$trener['photo'];?>" alt="<?=$trener['name'];?>">
                    </div>
                    <h2><?=$trener['surname']." ".$trener['name'];?></h2>
                    <p><?=$trener['phone'];?></p>
               
                </div>
            <?php
        }
    ?>
</div>
        



    
</body>
</html>