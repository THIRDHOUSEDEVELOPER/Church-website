<?php
session_start();

include('connection.php');

// define variables and set to empty values
/*
$titleErr = $subtitleErr = $commentErr = "";
$title = $subtitle = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["title"])) {
    $titleErr = "title is required";
  } else {
    $title = test_input($_POST["title"]);
  }

  if (empty($_POST["subtitle"])) {
    $subtitleErr = "subtitle is required";
  } else {
    $subtitle = test_input($_POST["subtitle"]);
  }

  if (empty($_POST["comment"])) {
    $commentErr = " is required";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  
} */

// Escape user inputs for security
if ($_POST['submit']) {
    $title = ($_REQUEST['title']);
    $subtitle = ($_REQUEST['subtitle']);
    $comment = ($_REQUEST['comment']);
   
    // attempt insert query execution
    $sql = "INSERT INTO sermon (title, subtitle, comment) VALUES ('$title', '$subtitle', '$comment')";

         if(mysqli_query($conn, $sql)){
              echo "Records added successfully.";
                 } else{
                     echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                            }

}

    // close connection
        mysqli_close($conn);

?>