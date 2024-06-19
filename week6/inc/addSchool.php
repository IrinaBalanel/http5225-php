<?php
    // print_r($_POST);
    // Array ( [schoolName] => test [schoolLevel] => test [phone] => 346365363 [email] => email@gmail.com )

    $schoolName = $_POST["schoolName"];
    $schoolLevel = $_POST["schoolLevel"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];

    require('../reusable/con.php');

    $query = "INSERT INTO schools (`School Name`, `School Level`, `Phone`, `Email`)
                            VALUES ('$schoolName', '$schoolLevel', '$phone', '$email')";
    
    $school = mysqli_query($connect, $query);
    
    if($school){
        header('Location: ../index.php');
    } else {
        echo 'Failed: ' .mysqli_error($connect);
    }