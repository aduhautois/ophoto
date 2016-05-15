<div class="small-12 large-6 columns">
    <form method="post" action="addphotos.php" enctype="multipart/form-data">

        <h5>Please select a client:</h5>
        <br/>
        <h3>Clients</h3>
        <select name="collection">
            <?php 

                $result = "SELECT users.UserID, users.FirstName, users.LastName, collections.CollectionID FROM users JOIN collections ON users.UserID = collections.UserID WHERE users.Active = 1 ORDER BY LastName, CollectionID";
                $result = mysqli_query($connect, $result);

                if(!$result) {
                    echo 'Whoops, that didn\'t work. Try again.';
                }
                else
                {
                   while ($row = mysqli_fetch_array($result))
                   {
                       echo "<option value=\"".$row["CollectionID"]."\">".$row["LastName"]." -  ".$row["CollectionID"]."</option>";

                   }
                }
            ?>
        </select>
        <h3>Photo</h3>
        <label for="exampleInputFile">UPLOAD</label>
        <input type="file" name="userfile" id="exampleInputFile" required>
        <p class="help-block">Upload photo here..</p>

        <br/>
        <h3>Title</h3>
        <input type="text" name="title" placeholder="Type a name for your photo.." required>

        <br/>
        <h3>Description</h3>
        <input type="text" name="description" placeholder="Type a description.." >

        <input type="submit" value="UPLOAD" class="button large">
    </form>
</div>
<div class="small-12 large-6 columns">
    <?php

        if ($_POST == null) {
            echo '<h3>No Photo Added</h3>';
        } else {

            $description = addslashes(trim($_POST['description']));
            $collectionid = $_POST['collection'];
            $imagepath = 'photos/'.$collectionid.'/'.$_FILES['userfile']['name'];
            $imagefilesize = $_FILES['userfile']['size'];
            $title = addslashes(trim($_POST['title']));

            if (!file_exists('photos/'.$collectionid)) {
                mkdir('photos/'.$collectionid, 0777, true);
            } else {
                die();
            }

            $result = "INSERT INTO photos (ImagePath, ImageFileSize, CollectionID, Description, Title)
                       VALUES ('$imagepath','$imagefilesize','$collectionid','$description','$title')";

            $result = mysqli_query($connect, $result);

            if (!$result) {
                echo 'Whoops, that didn\'t work. Try again.';
            } else {
                echo 'Success! Photo was added to the collection \''.$collectionid.'\'.';
                echo '<br/>';
                echo '<h5>'.$title.'</h5>';
                echo '<br/>';
                echo '<h5>'.$description.'</h5>';
                echo '<br/>';
                echo '<img src="'.$imagepath.'" height="500"';

            }

            if($imagefilesize == 0) {
                echo 'Please upload an image.';
            } else {
                copy($_FILES['userfile']['tmp_name'], $imagepath);
                echo 'All done!';
            }

        }

        ?>
</div>