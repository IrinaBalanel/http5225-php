<?php
    // print_r($_POST);
    // Array ( [schoolName] => test [schoolLevel] => test [phone] => 346365363 [email] => email@gmail.com )
    include('functions.php');
    $schoolName = $_POST["schoolName"];
    $schoolLevel = $_POST["schoolLevel"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];

    require('../reusable/con.php');

    $query = "INSERT INTO schools (`School Name`, `School Level`, `Phone`, `Email`)
                            VALUES (
                                '". mysqli_real_escape_string($connect, $schoolName)."',
                                '". mysqli_real_escape_string($connect, $schoolLevel)."',
                                '$phone', '$email')";
    
    $school = mysqli_query($connect, $query);
    
    if($school){
        set_message('School is added', 'success');
        header('Location: ../index.php');
    } else {
        echo 'Failed: ' .mysqli_error($connect);
    }