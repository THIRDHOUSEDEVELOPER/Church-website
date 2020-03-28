<?php
    include('youmsln.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sermon Update</title>

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
                    <form method="POST" action="sermonscrip.php" class="register-form" id="register-form">
                        <h2>SERMON UPDATE PANEL</h2>
                    <div id="title">
                        Title <input type="text" name="title" placeholder="title" required> <br>
                    </div>
                        <div id="subtitle">
                        Subtitle <input type="text" name="subtitle" placeholder="subtitle" required> <br>
                    </div> 
                         <div class="form-group form-row" id="comment">
                         <textarea name="comment" id="" cols="74" rows="30"  placeholder="type the body of your text here!" required></textarea>><br>
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