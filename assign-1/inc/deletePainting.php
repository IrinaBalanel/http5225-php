<?php
require('../reusable/con.php');
$id = $_GET ['id'];
$query = "DELETE FROM paintings WHERE `id` = '$id'";
$painting = mysqli_query($connect, $query);

if($painting){
    header( 'Location: ../index.php');
}else{
    echo "Failed: " . mysqli_error ($connect);
}
