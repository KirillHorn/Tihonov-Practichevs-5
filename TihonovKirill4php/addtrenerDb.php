<?php
        $con = mysqli_connect("localhost","root","","fitnes_tihonov");

        if ($_FILES && $_FILES["photo"]["error"]== UPLOAD_ERR_OK)
        {
            $name1 = "img/". $_FILES["photo"]["name"];
            $name2 = $_FILES["photo"]["name"];
            move_uploaded_file($_FILES["photo"]["tmp_name"], $name1);
            echo "Файл загружен";
        }
      
if(!empty($_POST)){ //проверяет, является ли переменная пустой. ! - не

    $surname = $_POST["surname"];
    $name = $_POST["name"];
    $patronymic = !empty($_POST["patronymic"]) ? $_POST["patronymic"] : "null"; //если переменная не пуста, то 
    $birthday = $_POST["birthday"];
    $phone =  $_POST["phone"];
    $gender = $_POST["gender"];
    $photo =$name2;
    $pass = $_POST["password"];
    $awards = !empty($_POST["awards"]) ? $_POST["awards"] : "-";
    $created_at = date("Y-m-d H:i:s");
    
    $query = "insert into users(id_users,surname,name,patronymic,phone,password,birthday,photo,gender,create_date,awards,role) values(null,'$surname','$name','$patronymic','$phone','$pass','$birthday','$photo','$gender','$created_at','$awards','3')";
    
    
    $result=mysqli_query($con,$query);
    var_dump($_FILES);
    if($result) {
        echo "<script>alert('запись добавлена успешна'); location.href='/';</script>";
    } else {
        echo "<script>alert('Ошибка добавление')</script>";
        echo mysqli_error($con);
        echo "<br>",$query;
    }

    }
?>