<?php

if ($_POST == null) {
    echo '<h3>No collection inserted.</h3>';
} else {

    $collectionid = addslashes(trim($_POST['collectionid']));
    $collectiondate = addslashes(trim($_POST['collectiondate']));
    $description = addslashes(trim($_POST['description']));
    $userid = addslashes(trim($_POST['userid']));

    $result = "INSERT INTO collections (collectionid, collectiondate, description, userid) 
            VALUES ('$collectionid','$collectiondate','$description','$userid')";


    $result = mysqli_query($connect, $result);

    if (!$result) {
        echo 'Whoops, that didn\'t work. Try again.';
    } else {
        echo '<h3>Success! Collection was added to the database.</h3>';
        echo '<br>';

        echo 'COLLECTION: '.$collectionid.'<br>';
        echo 'DATE: '.$collectiondate.'<br>';
        echo 'DESCRIPTION: '.$description.'<br>';
        echo 'CLIENT #: '.$userid;
    }
}

?>