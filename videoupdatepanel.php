<?php
    include('youmsln.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Video Update</title>

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
                    <form method="POST" action=".php" class="register-form" id="register-form">
                      <h2>VIDEO UPLOAD PANEL</h2>
                    
                    <div id="">
                        <label for="event describtion">SELECT VIDEO</label>
                        <input type="file" name="video" accept="video/*" required> <br>
                    </div>
                    
                    <div id="image describtion">
                        <label for="eventvenue">VIDEO DESCRIBTION</label>
                        <input type="text" name="videodescrition" placeholder="VIDEO DESCRIBTION" required> <br>
                   
                         <div id="submitbtn">
                           <input type="submit" name="upload" value="Upload" class="submit">
                         </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

        <?php
        include('footer.php');
        ?>

    <!-- JS -->
    <script src="validation.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script> 
</body><!-- This templates was made by Colorlib (https://colorlib.com)-->
</html>