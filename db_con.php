<?php
$DB_connect = mysqli_connect('localhost','root','','primecare');

if (!$DB_connect) {
    die('Connection failed'.mysqli_connect_error());
}
?>