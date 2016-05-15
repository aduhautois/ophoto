<?php session_start();?>

<!DOCTYPE html>
<html lang="en-US">
    <?php require('lib/nofouc.inc');?>
    <?php require('lib/header.inc');?>
    <script type="text/javascript" src="js/modernizr.custom.86080.js"></script>
    <style>
        .home-menu { background-color: rgba(0,0,0,.5);}
    </style>

    <body class="no-fouc" style="background-image: none;">
        <?php include('lib/facebookscript.inc');?>
        <?php include('lib/nav.inc');?>
        <?php include('lib/facebook.inc');?>
        <?php include('lib/connect.inc');?>
        
        
        <div class="manage-container out wow">
            <div class="row">
                <div class="small-12 large-12 columns">
                    <?php 
                        if($_SESSION['admin'] == 1){
                            include('lib/managenav.inc');
                        } else {
                            include('lib/mynav.inc');
                        }
                    
                    ?>
                    <br/>
                    <h5>UPDATE MY INFO</h5>
                    <div class="my-images wow bounceInLeft">
                    <form name="profileForm" method="post" action="myprofile.php">
                        
                        <?php
                            
                            $query = "SELECT * FROM users WHERE UserID = ".$_SESSION['userid'];

                            $result = mysqli_query($connect, $query);

                            IF(!$result) {
                                echo 'no records found';
                            } ELSE {
                                
                                while($row = mysqli_fetch_array($result)) {
                                    echo '<div class="row">';
                                    
                                    echo '<h3>Name</h3><br>';
                                    echo '<div class="small-6 large-6 columns">';
                                    echo '<input type="text" name="firstname" id="firstname" value="'.$row['FirstName'].'" disabled /><br/>';
                                    echo '</div>';
                                    echo '<div class="small-6 large-6 columns">';
                                    echo '<input type="text" name="lastname" id="lastname" value="'.$row['LastName'].'" disabled /><br/>';
                                    echo '</div>';
                                    echo '<h3>Address</h3><br>';
                                    echo '<div class="small-12 large-12 columns">';
                                    echo '<input type="text" name="address" id="address" value="'.$row['Address'].'" required />';
                                    echo '</div>';
                                    echo '<div class="small-4 large-4 columns">';
                                    echo '<input type="text" name="city" id="city" name="city" value="'.$row['City'].'" required />';
                                    echo '</div>';
                                    echo '<div class="small-4 large-4 columns">';
                                    echo '<input type="text" name="state" id="state" maxlength="2" value="'.$row['State'].'" required />';
                                    echo '</div>';
                                    echo '<div class="small-4 large-4 columns">';
                                    echo '<input type="text" name="zip" id="zip" pattern="[0-9]*" min="0" maxlength="5" value="'.$row['Zip'].'" required /><br>';
                                    echo '</div>';
                                    echo '<h3>Contact</h3><br>';
                                    echo '<div class="small-6 large-6 columns">';
                                    echo '<input type="email" name="email" id="email" value="'.$row['Email'].'" required />';
                                    echo '</div>';
                                    echo '<div class="small-6 large-6 columns">';
                                    echo '<input type="tel" name="phone" id="phone" value="'.$row['Phone'].'" required />';
                                    echo '</div>';
                                    echo '<h3>Password</h3><br>';
                                    echo '<div class="small-4" large-4 columns">';
                                    echo '<input type="password" name="password1" id="password1" placeholder="current" required />';
                                    echo '</div>';
                                    echo '</div>';
                                    echo $message;
                                    echo '<input type="submit" class="button" value="Change Info" name="submit" />';
                                }
                            }
                        
                            if ($_POST == null) {
                            } else {

                                $phone = addslashes(trim($_POST['phone']));
                                $address = addslashes(trim($_POST['address']));
                                $city = addslashes(trim($_POST['city']));
                                $state = addslashes(trim($_POST['state']));
                                $zip = addslashes(trim($_POST['zip']));
                                $email = addslashes(trim($_POST['email']));
                                $password = addslashes(trim($_POST['password']));
                                $hash = password_hash($password, PASSWORD_BCRYPT);    
                                
                                $result ="UPDATE users SET Phone = ".$phone.", Address = '".$address."', City = '".$city."', State = '".$state."', Zip = ".$zip.", Email = '".$email."' WHERE UserID = ".$_SESSION['userid'];


                                $result = mysqli_query($connect, $result);

                                if (!$result) {
                                    echo 'Whoops, that didn\'t work. Try again.';
                                } else {
                                    if(password_verify($password, $hash)){
                                         echo 'Success! Password changed.';
                                    }
                                    else {
                                        echo 'Error. Please try again.';
                                    }
                                }
                            }

                        ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
        <?php include('lib/scripts.inc');?>
    </body>
</html>