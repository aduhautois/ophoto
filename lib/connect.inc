<?php

$connect = mysqli_connect('localhost','root','root','ophotodb');
IF (!$connect) {
    echo 'No connection detected.';
}

?>