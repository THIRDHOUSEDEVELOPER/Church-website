<?php
include('connection.php');

// Escape user inputs for security
if ($_POST['submit']) {
    $eventname = ($_REQUEST['eventname']);
    $eventdescription = ($_REQUEST['eventdescription']);
    $venue = ($_REQUEST['venue']);
    $date_time = ($_REQUEST['date_time']);
   
    // attempt insert query execution
    $sql = "INSERT INTO events (eventname, eventdescription, venue, date_time)
                VALUES ('$eventname', '$eventdescription', '$venue', '$date_time')";

         if(mysqli_query($conn, $sql)){
              echo "Records added successfully.";
                 } else{
                     echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                            }

}

    // close connection
        mysqli_close($conn);











?>