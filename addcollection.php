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
                    <form method="post" action="addcollection.php" enctype="multipart/form-data">
                        <h3>Collection Name</h3>
                        <input type="text" name="collectionid" id="collectionid" required />
                        <h3>Collection Date</h3>
                        <input type="date" name="collectiondate" id="collectiondate" required />
                        <h3>Description</h3>
                        <input type="text" name="description" id="description" required />
                        <h3>Client</h3>
                        <!--<input type="number" min="1" name="userid" id="userid" required />-->
                        <select name="userid" id="userid" required>
                        <?php 

                            $result = "SELECT LastName, FirstName, UserID FROM users WHERE Active = 1 ORDER BY LastName, FirstName";
                            $result = mysqli_query($connect, $result);

                            if(!$result) {
                                echo 'Whoops, that didn\'t work. Try again.';
                            }
                            else
                            {
                               while ($row = mysqli_fetch_array($result))
                               {
                                   echo "<option value=\"".$row["UserID"]."\">".$row["LastName"].",  ".$row["FirstName"]."</option>";

                               }
                            }
                        ?>
                        </select>
                        <input type="submit" class="button" name="submit" id="submit" value="Submit"/>
                    </form>
                </div>
                <div class="small-12 large-6 columns">
                    <div class="collection-box">

                        <?php include('lib/addcollection.inc');?>

                    </div>
                </div>
            </div>
        </div>        
        <?php include('lib/scripts.inc');?>
    </body>
</html>