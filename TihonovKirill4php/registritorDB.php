<?php
        $con = mysqli_connect("localhost","root","","fitnes_tihonov");
if(!empty($_POST)){ //проверяет, является ли переменная пустой. ! - не

    $surname = $_POST["surname"];
    $name = $_POST["name"];
    $patronymic = !empty($_POST["patronymic"]) ? $_POST["patronymic"] : "null"; //если переменная не пуста, то 
    $birthday = $_POST["birthday"];
    $phone =  $_POST["phone"];
    $gender = $_POST["gender"];
    $pass = $_POST["password"];
    $pass2= $_POST["password2"];
    $photo="-";
    $awards="-";
    $password=null;
    if ($pass==$pass2) {
      $password=$pass;
      $role="2";
      $created_at=date("Y-m-d H:i:s");
    //   $query_registr = "insert into users(id_users,surname,name,patronymic,phone,password,birthday,gender,role); 
    $query_registr="INSERT into users(id_users,surname,name,patronymic,phone,password,birthday,photo,gender,create_date,awards,role) values(null,'$surname','$name','$patronymic','$phone','$pass','$birthday','$photo','$gender','$created_at','$awards','2')";
      $result_registr=mysqli_query($con,$query_registr);
      print_r($query_registr);
      if ($result_registr) {
        echo "<script>alert('Регестрация прошла успешно!')</script>";
      } else {
        echo "<script>alert('Ошибка регестрации: Пароли не совподают')</script>";
        echo mysqli_error($con);
    }
    }
  
}
?>