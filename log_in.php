<?php

    session_start();
    
    require('lib/connect.inc');

    $user_name = trim($_POST['username']);
    $user_pw = trim($_POST['password']);

    $query = "SELECT * FROM users WHERE email = '$user_name' LIMIT 1";
    $result = mysqli_query($connect, $query);
    
    while ($row = mysqli_fetch_array($result)){
            $admin = $row["Admin"];
            $hash = $row["Password"];
            $userid = $row["UserID"];
        }

    if(password_verify($user_pw, $hash)){
        $_SESSION['user'] = $user_name;
        $_SESSION['admin'] = $admin;
        $_SESSION['userid'] = $userid;
        

        if($admin == 1){
            header('location: manage.php');
        }
        else {
            header('location: myphotos.php');
        }
    } else {
        header('location: login.php');
    }
?>
