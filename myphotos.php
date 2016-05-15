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
                    <?php include('lib/mynav.inc');?>
                    <br/>
                    <h5>Last 10 Uploads</h5>
                    <div class="last-10-images wow bounceInLeft">
                        <ul>
                        
                        <?php
                            
                            $query = "SELECT * FROM photos JOIN collections WHERE photos.CollectionID = collections.CollectionID AND collections.UserID = ".$_SESSION['userid']." ORDER BY collections.collectionid, photoid DESC LIMIT 10";

                            $result = mysqli_query($connect, $query);

                            IF(!$result) {
                                echo 'no records found';
                            } ELSE {
                                while($row = mysqli_fetch_array($result)) {
                                    echo '<li><span data-tooltip aria-haspopup="true" class="has-tip" title="'.$row['CollectionID'].' - '.$row['Title'].'"><img src="'.$row['ImagePath'].'" ></span></li>';
                                }
                            }
                        ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>        
        <?php include('lib/scripts.inc');?>
    </body>
</html>