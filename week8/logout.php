<?php
    include('inc/function.php');

    session_destroy(); //everything will be deleted
    header('Location: login.php');
?>