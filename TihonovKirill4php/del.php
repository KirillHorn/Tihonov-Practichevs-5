<?php
        // $con = mysqli_connect("localhost","root","","fitnes_tihonov"); 

        // $trener_id = !empty($_GET['trener'])?$_GET['trener']:null;
        // if ($trener_id !== null ) {
        //     $query="DELETE from users where id_users = '$trener_id'";
    
        //     $result=mysqli_query($con,$query);
    
        // if($result) {
        //     echo "<script>alert('запись удалена'); location.href='/';</script>";
        // } else {
        //     echo "<script>alert('Ошибка удаление')</script>";
        //     echo mysqli_error($con);
        //     echo "<br>",$query;
        // }
        // }
      
        $con = mysqli_connect("localhost","root","","fitnes_tihonov"); 

        $trener_id = !empty($_GET['trener'])?$_GET['trener']:1;
        $trener_info = mysqli_fetch_array(mysqli_query($con,"select * from users where id_users=$trener_id"));
        $query="DELETE from users where id_users = '$trener_id'";
    
    $result=mysqli_query($con,$query);

    if($result) {
        echo "<script>alert('запись удалена'); location.href='/';</script>";
    } else {
        echo "<script>alert('Ошибка удаление')</script>";
        echo mysqli_error($con);
        echo "<br>",$query;
    }

    
?>

    
