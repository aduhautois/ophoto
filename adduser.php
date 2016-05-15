<?php session_start();?>

<!DOCTYPE html>
<html lang="en-US">
    <?php require('lib/nofouc.inc');?>
    <?php require('lib/header.inc');?>
    <script type="text/javascript" src="js/modernizr.custom.86080.js"></script>
    <?php include('lib/navcolor.inc');?>
    <style>
        .home-menu { background-color: rgba(0,0,0,.5);}
    </style>
    <body class="no-fouc" style="background-image: none;">
        <?php include('lib/facebookscript.inc');?>
        <?php include('lib/nav.inc');?>
        <?php include('lib/facebook.inc');?>
        
        <div class="manage-container wow">
            <div class="row">
                <?php include('lib/connect.inc');?>
                <?php include('lib/managenav.inc');?>
                <div class="small-12 large-6 columns">
                    <form method="post" action="adduser.php" enctype="multipart/form-data">
                        
                        <h3>Name</h3>
                        <div class="row">
                            <div class="small-6 large-6 columns">
                                <input type="text" name="firstname" id="firstname" placeholder="First name" required />
                            </div>
                            <div class="small-6 large-6 columns">
                                <input type="text" name="lastname" id="lastname" placeholder="Last name" required />
                            </div>
                        </div>
                        <h3>Phone Number</h3>
                        <input type="tel" name="phone" id="phone" placeholder="Enter a phone number with no dashes" required/>
                        <h3>Address</h3>
                        <input type="text" name="address" id="address" placeholder="Street number and name" required />
                        <div class="row">
                            <div class="small-4 large-4 columns">
                                <input type="text" name="city" id="city" placeholder="City" required />
                            </div>
                            <div class="small-4 large-4 columns">
                                <input type="text" name="state" id="state" placeholder="State" maxlength="2" required />
                            </div>
                            <div class="small-4 large-4 columns">
                                <input type="number" name="zip" id="zip" placeholder="Zip" pattern="[0-9]*" maxlength="5" min="0" required />
                            </div>
                        </div>
                        <h3>E-Mail</h3>
                        <input type="email" name="email" id="email" placeholder="name@example.com" required />
                        <h3>Password</h3>
                        <input type="password" name="password" id="password"
                        placeholder="Temp password" required />
                        <h3>Admin Status</h3>
                        <div class="switch">
                            <div class="switch">
                                <input class="switch-input" id="admin" type="checkbox" name="admin">
                                <label class="switch-paddle" for="admin">
                                <span class="show-for-sr">Is Admin?</span>
                                </label>
                            </div>
                        </div>
                        <input class="button" type="submit" name="submit" id="submit" />
                    </form>
                </div>
                <div class="small-12 large-6 columns">
                    <div class="collection-box">

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
                                $password = addslashes(trim($_POST['password']));
                                $hash = password_hash($password, PASSWORD_BCRYPT);    
                                if(isset($_POST['admin'])) {
                                    $admin = 1;
                                }

                                $adminstatus = 'N';
                                if($admin = 1){
                                    $adminstatus = 'Y';
                                } else {
                                    $adminstatus = 'N';
                                }

                                $result = "INSERT INTO users (FirstName, LastName, Phone, Address, City, State, Zip, Email, Password, Admin)
                                        VALUES ('$firstname','$lastname','$phone','$address','$city','$state','$zip','$email','$hash', '$admin')";


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

                    </div>
                </div>
            </div>
        </div>        
        <?php include('lib/scripts.inc');?>
    </body>
</html>