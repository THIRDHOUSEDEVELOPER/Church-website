<?php
    include('youmsln.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Image Update</title>

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
                    <form method="POST" action="imageup.php" enctype="multipart/form-data" class="register-form" id="register-form">
                      <h2>IMAGE UPLOAD PANEL</h2>
                    
                    <div id="">
                        <label for="event describtion">SELECT IMAGE</label>
                        <input type="file" name="file" accept="image/*" required> <br>
                    </div>
                    
                    <div id="image describtion">
                        <label for="eventvenue">IMAGE DESCRIBTION</label>
                        <input type="text" name="imagedescription" placeholder="IMAGE DESCRIBTION"> <br>
                   
                         <div id="submitbtn">
                           <input type="submit" name="submit" value="Upload" class="submit">
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