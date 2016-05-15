<?php

if ($_POST == null) {
} else {
    
    $firstname = addslashes(trim($_POST['firstname']));
    $lastname = addslashes(trim($_POST['lastname']));
    $phone = addslashes(trim($_POST['phone']));
    $address = addslashes(trim($_POST['address']));
    $city = addslashes(trim($_POST['city']));
    $state = addslashes(trim($_POST['state']));
    $zip = addslashes(trim($_POST['zip']));
    $email = addslashes(trim($_POST['email']));
    $hash = password_hash($_POST['password'], PASSWORD_DEFAULT, ['cost' => 12]);    
    if(isset($_POST['admin'])) {
        $admin = 1;
    }
    
    $adminstatus = 'N';
    if($admin = 1){
        $adminstatus = 'Y';
    } else {
        $adminstatus = 'N';
    }

    $result = "INSERT INTO collections (FirstName, LastName, Phone, Address, City, State, Zip, Email, Password, Admin)
            VALUES ('$firstname','$lastname','$phone','$address','$city','$state','$zip','$email','$hash','$admin')";


    $result = mysqli_query($connect, $result);

    if (!$result) {
        echo 'Whoops, that didn\'t work. Try again.';
    } else {
        echo '<h3>Success! User was added to the database.</h3>';
        echo '<br>';

        echo 'NAME: '.$firstname.' '.$lastname.'<br>';
        echo 'PHONE: '.$phone.'<br>';
        echo 'ADDRESS: '.$city.', '.$state.' '.$zip.'<br>';
        echo 'EMAIL: '.$email.'<br>';
        echo 'ADMIN: '.$adminstatus.'<br>';
    }
}

?>