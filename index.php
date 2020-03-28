<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<!-- 
        Awesome Template
        http://www.templatemo.com/preview/templatemo_450_awesome
        -->
		<title>The Christian Chapel ADSU</title>
		<meta name="keywords" content="">
		<meta name="description" content="">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="css/templatemo-style.css">
		<link rel="stylesheet" href="css/animate.min.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
		
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.singlePageNav.min.js"></script>
		<script src="js/typed.js"></script>
		<script src="js/wow.min.js"></script>
		<script src="js/custom.js"></script>
	</head>
	<body id="top">
	
		<!-- start preloader -->
		<div class="preloader">
			<div class="sk-spinner sk-spinner-wave">
     	 		<div class="sk-rect1"></div>
       			<div class="sk-rect2"></div>
       			<div class="sk-rect3"></div>
      	 		<div class="sk-rect4"></div>
      			<div class="sk-rect5"></div>
     		</div>
    	</div>
    	<!-- end preloader -->

		<?php
   		 include('header.php');
		?>
		  
		 <!-- start navigation -->
		<nav class="navbar navbar-default templatemo-nav" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
					</button>
					<a href="#" class="navbar-brand">THE CHRISTIAN CHAPEL -ADSU</a>
				</div>
					<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#home">HOME</a></li>
						<li><a href="#about">NOTICEBOARD</a></li>
						<li><a href="#service">SERMON</a></li>
						<li><a href="#portfolio">GALLERY</a></li>
						<li><a href="#contact">ABOUT</a></li>
                        <li><a href="#contact-us">CONTACT</a></li>
                	</ul>
				</div>
			</div>
		</nav>
		<!-- end navigation -->

    	<!-- start home -->
    	<section id="home">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-offset-2 col-md-8">
    					<h1 class="wow fadeIn" data-wow-offset="50" data-wow-delay="0.9s">GREAT GRACE <br> <span>Acts 4:33</span></h1>
    					<div class="element">
                            <div class="sub-element">Hello, Welcome to The Christian Chapel- Adsu.</div>
                            <div class="sub-element">Worship With us on: </div>
							<div class="sub-element">SUNDAYs: 8:00 AM </div>
							<div class="sub-element">WEDNESDAYs: 4:00 PM </div>
                            <div class="sub-element">You can join our Subgroups, we have FCS and NIFES</div>
                        </div>
    					<a data-scroll href="admin.php" class="btn btn-default wow fadeInUp" data-wow-offset="50" data-wow-delay="0.6s">ADMIN DASHBOARD</a>
    				</div>
    			</div>
    		</div>
    	</section>
    	<!-- end home -->

    	<!-- start about -->
		<section id="about">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
    					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">UPCOMING <span>EVENTS</span></h2>
						<?php
						include('getevents.php');
						?>
				</div>
			</div>
		</section>
		<!-- end about -->

       	<!-- start service -->
    	<section id="service">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-12">
    					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">READ <span>OUR</span> SERMONS</h2>
					</div>
					
    				<?php
					include('getsermon.php');
					?>

    				</div>
    		</div>
    	</section>
    	<!-- end servie -->

		<!-- start team -->
		<section id="team">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-12">
    					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s"><span>AUDIO</span> MESSAGES</h2>
    				</div>
					<?php
					include('getaudio.php');
					?>
    			</div>
    		</div>
    	</section>
    	<!-- end team -->



    	<!-- start portfolio -->
    	<section id="portfolio">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-12">
    					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s"><span>PICTURE</span> GALLERY</h2>
    				</div>
					<?php
					include('getpicture.php');
					?>
    			</div>
    		</div>
    	</section>
    	<!-- end portfolio -->

    	<!-- start contact -->
    	<section id="contact">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-12">
    					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">ABOUT <span>TCC-ADSU</span></h2>
    				</div>
    				<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.9s">
						<h3>Welcome Speech</h3>
						<P>Lorem ipsum dolor sit amet, tempor labore sadipscing over the years,
							and a great idea,
							but you should work per month exciting Eirmod tempor diam erat,
							sed diam of the project. But, in truth, two minutes,
							Lorem ipsum dolor sit amet, tempor labore sadipscing over the years,
							and a great idea,
							but you should work per month exciting Eirmod tempor diam erat,
							sed diam of the project. But, in truth, two minutes,
							Lorem ipsum dolor sit amet, tempor labore sadipscing over the years,
							and a great idea,
							but you should work per month exciting Eirmod tempor diam erat,
							sed diam of the project. But, in truth, two minutes,
							Lorem ipsum dolor sit amet, tempor labore sadipscing over the years,
							and a great idea,
							but you should work per month exciting Eirmod tempor diam erat,
							sed diam of the project. But, in truth, two minutes,
							Lorem ipsum dolor sit amet, tempor labore sadipscing over the years,
							and a great idea,
							but you should work per month exciting Eirmod tempor diam erat,
							sed diam of the project. But, in truth, two minutes,</P>
    					</form>
    				</div>
    				<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInRight" data-wow-offset="50" data-wow-delay="0.6s">
    					<address>
    						<p class="address-title" id="contact-us">OUR ADDRESS</p>
    						<span>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie.</span>
    						<p><i class="fa fa-phone"></i> +91 94884 87853</p>
    						<p><i class="fa fa-envelope-o"></i> giridesigns5@gmail.com</p>
    						<p><i class="fa fa-map-marker"></i> 50, Thiruvoodal Street, Thiruvannamalai - 606 601.</p>
    					</address>
    					<ul class="social-icon">
    						<li><h4>WE ARE SOCIAL</h4></li>
    						<li><a href="#" class="fa fa-facebook"></a></li>
    						<li><a href="#" class="fa fa-twitter"></a></li>
    						<li><a href="https://www.youtube.com/channel/UC4yzoGuKkCL_8FzI-B-x83A" class="fa fa-youtube"></a></li>
    					</ul>
    				</div>
    			</div>
    		</div>
    	</section>
		<!-- end contact -->

        <!-- start copyright -->
	<?php
	include('footer.php');
	?>
		<!-- end copyright -->
		
	</body>
</html>