<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en-US">
    <?php require('lib/nofouc.inc');?>
    <?php require('lib/header.inc');?>
    <script type="text/javascript" src="js/modernizr.custom.86080.js"></script>
    <body class="no-fouc">
        <script>
          window.fbAsyncInit = function() {
            FB.init({
              appId      : '213194959048649',
              xfbml      : true,
              version    : 'v2.5'
            });
          };

          (function(d, s, id){
             var js, fjs = d.getElementsByTagName(s)[0];
             if (d.getElementById(id)) {return;}
             js = d.createElement(s); js.id = id;
             js.src = "//connect.facebook.net/en_US/sdk.js";
             fjs.parentNode.insertBefore(js, fjs);
           }(document, 'script', 'facebook-jssdk'));
        </script>
        <?php include('lib/nav.inc');?>
        <?php include('lib/facebook.inc');?>
        <?php include('lib/slideshowfilter.inc');?>
        
        <div class="log-in-container">
            <div class="row">
                <div class="small-12 large-12 columns">
                    <h5>Log In</h5>
                    <form class="login-form" method="post" action="log_in.php">
                        <input type="text" name="username" placeholder="e-mail address" required/>
                        <input type="password" name="password" placeholder="password" required/>
                        <button type="submit" class="button" value="Log In">GO</button>
                    </form>
                </div>
            </div>
        </div>
        
        
        <?php include('lib/scripts.inc');?>
    </body>
</html>