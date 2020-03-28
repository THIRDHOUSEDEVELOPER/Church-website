<?php
session_start();

// Initiallizing variable

$username= "";
$errors= array();

// establishing connection

include_once('connection.php');

// loggin user

if ( isset($_POST['logging'])) {

    $username=mysqli_real_escape_string($conn, $_POST['username']);
    $password=mysqli_real_escape_string($conn, $_POST['password']);

        if(empty($username)) {
            array_push($errors, "username is required");
                     }

            if(empty($password)) {
                 array_push($errors, "password is required");
                        }

        if(count($errors) == 0) {
            $password = $password;

            $query = "SELECT * FROM logging WHERE username='$username' AND password='$password' ";
            $results = mysqli_query($conn, $query);

                if (mysqli_num_rows($results) == 1) {
                    $_SESSION['username'] = $username;
                    $_SESSION['success'] ="You are now logged in";
                        header('location:admin.php');
                }else {
                    array_push($errors, "wrong username or password");
                    echo"wrong username or password";
                    header('location:logging.php');
                }
        }
}

?>