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
                    <h5>CHANGE PASSWORD</h5>
                    <div class="my-images wow bounceInLeft">
                        <form name="passwordForm" method="post" action="password.php">
                            <div class="row">
                                <div class="small-6 large-6 columns">
                                    <input type="password" name="password1" id="password1" required placeholder="Current password"/>
                                    <input type="password" name="password2" id="password2" required placeholder="New password"/>
                                    <input type="password" name="password3" id="password3" required placeholder="Reenter new password"/>
                                    
                                    <input type="submit" class="button" value="Submit" name="submit" />
                                </div>
                            </div>
                        </form>
                        <?php

                        
                            if ($_POST == null) {
                            } else {
                                                            
                                $password1 = addslashes(trim($_POST['password1']));
                                $password2 = addslashes(trim($_POST['password2']));
                                $password3 = addslashes(trim($_POST['password3']));
                                $hash = password_hash($password1, PASSWORD_BCRYPT);
                                
                                if(password_verify($password1, $hash)){
                                    if(strcmp($password2, $password3 ) == 0) {
                                        
                                        $newhash = password_hash($password2, PASSWORD_BCRYPT);
                                        $query = "UPDATE users SET Password = '".$newhash."' WHERE UserID = ".$_SESSION['userid'];
                                        
                                        $result = mysqli_query($connect, $query);
                                        
                                        if(!$result) {
                                            echo 'Whoops! that didn\'t work. Try again.';
                                        }
                                        else {
                                            echo 'Success! Password changed.';
                                        }
                                    } else {
                                        echo 'New passwords do not match.';
                                    }
                                } else {
                                    echo 'Please enter the correct current password.';
                                }

                                $result = mysqli_query($connect, $result);

                            }

                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
        <?php include('lib/scripts.inc');?>
    </body>
</html>