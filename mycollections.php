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
                    <h5>My Photos</h5>
                    <div class="my-images wow bounceInLeft">
                        <ul>
                        
                        <?php
                            
                            $query = "SELECT photos.PhotoID, photos.ImagePath, photos.CollectionID, photos.Description AS PhotoDescription, photos.Title, collections.CollectionID, collections.UserID, collections.CollectionDate, collections.Description AS CollectionDescription FROM photos JOIN collections WHERE photos.CollectionID = collections.CollectionID AND collections.UserID = ".$_SESSION['userid']." ORDER BY collections.collectionid, photoid DESC LIMIT 10";

                            $result = mysqli_query($connect, $query);

                            IF(!$result) {
                                echo 'no records found';
                            } ELSE {
                                
                                while($row = mysqli_fetch_array($result)) {
                                    echo '<h3>'.$row['CollectionID'].'</h3><br>';
                                    echo '<p class="text-indent">DESCRIPTION: '.$row['CollectionDescription'].'</p>';
                                    echo '<p class="text-indent">DATE: '.$row['CollectionDate'].'</p>';
                                    echo '<p class="text-indent">PHOTOS: </p><br>';
                                    echo '<div class="row">';
                                    echo '<div class="small-2 large-2 columns">';
                                    echo '<a href="'.$row['ImagePath'].'" target="_blank"><img src="'.$row['ImagePath'].'"></a>';
                                    echo '</div>';
                                    echo '<div class="small-10 large-10 columns">';
                                    echo '<p>TITLE: '.$row['Title'].'</p><br>';
                                    echo '<p>DESCRIPTION: '.$row['PhotoDescription'].'</p><br>';
                                    echo '</div>';
                                    echo '</div>';
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