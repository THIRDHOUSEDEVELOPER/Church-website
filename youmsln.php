<?php
    session_start();

    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "you must loggin first";
        header('location: logging.php');
    }
    
    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
            header("location: logging.php");
    }
?>