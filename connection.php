<?php

$servername  = "localhost";
$username = "root";
$password  = "";
$db = "tccadsudb";


//create a connection
$conn = mysqli_connect ( $servername, $username, $password, $db );

//check connection
if (!$conn) {
    die( "connection failed:" . mysqli_connect_error() );
   }


?>