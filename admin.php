<?php
    include('youmsln.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>admin</title>

    <!-- Font Icon-->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="main">

    <?php
        include('header.php');
    ?>
        <div class="container">
            <div class="container-fluid">
            <header>
            <nav class="navbar navbar-default" role="navigation">
                <ul <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php"><button class="btn btn-primary btn-sm">HOME PAGE</button></a></li>
                    <form action="">
                        <li><input type="submit" class="btn btn-primary btn-sm submit" name="logout" value="LOGOUT"/></li>
                    </form>
                </ul>
                <div class="navbar-header navbar-brand">
                    <h1 class="general-font"> <span>TCC- ADSU</span> ADMIN DASHBOARD</h1>
                </div>
            </nav>
         </header>
        </div>             
     
            <div class="signup-form">                 
                <div class="general-font w3-ul">
                    <h4 class="text-center">SELLECT CONTENT TO UPDATE</h4>
                     <ul>
                        <a href="sermonupdatepanel.php"><li>SERMON</li></a> 
                        <a href="eventupdatepanel.php"><li>EVENTS</li></a>
                        <a href="imageuploadpanel.php"><li>PICTURE</li></a> 
                        <a href="audioupdatepanel.php"><li>AUDIO</li></a>                    
                    <!-- <a href="videoupdatepanel.php"><li>VIDEO</li></a> -->
                     </ul>  
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