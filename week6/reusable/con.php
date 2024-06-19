<?php
$connect = mysqli_connect('localhost', 'root', 'root', 'publicschools');
if(!$connect){
    die("Connection Failed: " . mysqli_connect_error());
}