<?php
    session_start(); //starts a session to store session info
    function set_message($message, $className){
        $_SESSION['message'] = $message; //message
        $_SESSION['className'] = $className;
    }

    //to display info to user: if the message exists, show ...
    function getMessage(){
        if(isset($_SESSION['message'])){
            echo 
            '<div class="alert alert-'.$_SESSION['className'].'" role="alert">'. $_SESSION['message'] .'</div>';
            unset($_SESSION['message']); //to unset the session not to show the same message
            unset($_SESSION['className']);
        }
    }