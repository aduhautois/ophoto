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
                <div class="small-12 large-12 columns">
                    <h3>CLIENTS</h3>
                    
                    <?php include('lib/viewclients.inc');?>
                </div>
            </div>
        </div>        
        <?php include('lib/scripts.inc');?>
    </body>
</html>