<?php
    include('youmsln.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Event Update</title>

    <!-- Font Icon-->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

     <?php
    include('header.php');
    ?>

    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <form method="POST" action="eventsscript.php" class="register-form" id="register-form">
                        <h2>EVENT UPDATE PANEL</h2>
                    <div id="eventname">
                        <label for="event name">NAME OF EVENT</label>
                        <input type="text" name="eventname" placeholder="NAME OF EVENT" required> <br>
                    </div>
                    <div id="describtion">
                        <label for="event describtion">EVENT DISCRIBTION</label>
                        <input type="text" name="eventdescription" placeholder="EVENT DISCRIBTION" required> <br>
                    </div>
                    <div id="eventvenue">
                        <label for="eventvenue">VENUE FOR THE EVENT</label>
                        <input type="text" name="venue" placeholder="VENUE FOR THE EVENT" required> <br>
                    </div>
                    <div id="eventdate">
                        <label for="eventdate">DATE|TIME FOR THE EVENT</label>
                        <input type="datetime-local" name="date_time" max="2019-08-05" > <br>
                    </div>
                         <div id="submitbtn">
                           <input type="submit" name="submit" value="Post Entry" class="submit">
                         </div>
                    </form>
                </div>
            </div>
        </div>
        <?php
    include('footer.php');
    ?>
    </div>

    <!-- JS -->
    <script src="validation.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script> 
</body><!-- This templates was made by Colorlib (https://colorlib.com)-->
</html>