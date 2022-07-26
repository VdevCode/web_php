<?php

    $connect = mysqli_connect('localhost','root');
    mysqli_select_db($connect,"userinfor");

    $user = $_POST['user'];
    $email = $_POST['email'];
    $message = md5($_POST['message']);

    $query = "INSERT INTO `logininfor` (`user`,`email`,`message`) VALUES ('$user','$email','$message')";
    mysqli_query($connect,$query);
    
    echo "oke rồi , đã gửi";
?>