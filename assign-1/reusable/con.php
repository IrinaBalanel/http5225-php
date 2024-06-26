<?php
$connect = mysqli_connect('localhost', 'root', 'root', 'art');
if(!$connect){
    die("Connection Failed: " . mysqli_connect_error());
}