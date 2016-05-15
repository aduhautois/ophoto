<?php

    session_start();
    
    require('lib/connect.inc');

    $user_name = trim($_POST['username']);
    $user_pw = trim($_POST['password']);

    $query = "SELECT * FROM users WHERE email = '$user_name' AND
                                       password = '$user_pw' LIMIT 1";
    $result = mysqli_query($connect, $query);
    
    while ($row = mysqli_fetch_array($result)){
            $admin = $row["Admin"];
            $hash = $row["Password"];
        }
    
    if(mysqli_num_rows($result) == 1) {

        if(password_verify($password, $hash){
            $_SESSION['user'] = $user_name;
            $_SESSION['admin'] = $admin;

            if($admin == 1){
                header('location: manage.php');
            }
            else {
                header('location: myphotos.php');
            }
        } ELSE {
            echo 'Invalid login.';
        }
?>
