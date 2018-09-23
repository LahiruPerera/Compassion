<!DOCTYPE HTML>
<html>
<head>
<title>Compassion</title>
<link href="<?php echo base_url(); ?>compassion/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo base_url(); ?>compassion/js/jquery-1.11.0.min.js"></script>
<!-- Custom Theme files -->
<link href="<?php echo base_url(); ?>compassion/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Donate Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android compassionatible web template, 
Smartphone compassionatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Karla:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Archivo+Narrow:400,700' rel='stylesheet' type='text/css'>
<!--google fonts-->
<!-- animated-css -->
		<link href="<?php echo base_url(); ?>compassion/css/animate.css" rel="stylesheet" type="text/css" media="all">
		<script src="<?php echo base_url(); ?>compassion/js/wow.min.js"></script>
		<script>
		 new WOW().init();
		</script>
<!-- animated-css -->
<script src="<?php echo base_url(); ?>compassion/js/responsiveslides.min.js"></script>
 <script>
    // You can also use "$(window).load(function() {"
    $(function () {
      // Slideshow 1
      $("#slider1").responsiveSlides({
         auto: true,
		 nav: true,
		 speed: 500,
		 namespace: "callbacks",
      });
    });
  </script>

</head>
<body>
<!--banner start here-->
<div class="ban-mother-grid">
<div class="slider">
		    <ul class="rslides" id="slider1">
		      <li>
		      	<div class="banner">
					
				</div>
		      </li>
		      <li>
		      	<div class="banner2">
					
				</div>
		      </li>
		      <li>
		      	<div class="banner3">
					
				</div>
		      </li>
		    </ul>
 </div>	
<div class="header">
	<div class="container">
			   <div class="logo wow bounceInLeft" data-wow-delay="0.2s">
			     <h1><a href="<?php echo base_url(); ?>index.php/Home">Compassion</a></h1>
			   </div>
			   <div class="header-icons">
			   	 <ul>
			   	 	<li><a href="#" class="fb"> </a></li>
			   	 	<li><a href="#" class="twit"> </a></li>
			   	 	<li><a href="#" class="gmail"> </a></li>
			   	 	<li><a href="#" class="dri"> </a></li>
			   	 </ul>
			   </div>
			    <div class="clearfix"> </div>
    </div>	
    <div class="righttop">
    	<?php
    if($this->session->userdata('logged_in'))
    {	
    	$name = $this->session->userdata('name');
    	?>
    	<div >
    		<p class="text-right " style ="color:#fdbd10; font-size:25px; font-weight:bold;">Hello <?php echo $name; ?></p>
    	</div>

    	<a href="<?php echo base_url(); ?>index.php/dashboard/log_out" class="btn btn-info btn-lg pull-right" id="login" role="button">Logout</a>
    	<a href="<?php echo base_url(); ?>index.php/Profile" class="btn btn-info btn-lg pull-right" id="login" role="button">My Profile</a>

    	<div class="GetInvolve">
	    <a href="<?php echo base_url(); ?>index.php/PlaceDonation" class="btn btn-info btn-lg" role="button">Place Donation</a>
	    <a href="<?php echo base_url(); ?>index.php/Req_form_controller" class="btn btn-info btn-lg" role="button">Request Donation</a>
		</div>
		
    <?php } 
    else {
  
    ?>
    	
    	<a href="<?php echo base_url(); ?>index.php/Login" class="btn btn-info btn-lg pull-right" id="login" role="button">Login</a>
    	<a href="<?php echo base_url(); ?>index.php/Home/signUp" class="btn btn-info btn-lg pull-right" id="getin" role="button">Get Involved</a>
    
	<?php
	}
	?>
	</div>

</div>

 <!--navgation start here-->
<div class="top-nav">
    	 <span class="menu"> <img src="<?php echo base_url(); ?>compassion/images/icon.png" alt=""></span>	
		<ul class="res">
			<li><a class="active" href="<?php echo base_url(); ?>index.php/Home"><i class="glyphicon glyphicon-home"> </i>Home</a></li>
			<li><a href="<?php echo base_url(); ?>index.php/AboutUs"><i class="glyphicon glyphicon-user"> </i>About</a></li>
			<li><a href="shortcodes.html"><i class="glyphicon glyphicon-list-alt"> </i>Events</a></li>
		</ul>
		<!-- script-for-menu -->
					 <script>
					   $( "span.menu" ).click(function() {
						 $( "ul.res" ).slideToggle( 300, function() {
						 // Animation complete.
						  });
						 });
					</script>
	<!-- /script-for-menu -->
</div>	
</div>
<!--navgation end here-->
<!--banner end here-->
<div class="banner-strip">
	<div class="container">
		<div class="bann-strip-main">
			   
			   <div class="col-md-4 bann-strip-grid">
			   	  <div class="col-md-4 b-strip-left">
			   	  	 <span class="glyphicon glyphicon-heart hovicon effect-4 sub-b "aria-hidden="true"></span>
			   	  </div>
			   	  <div class="col-md-8 b-strip-right">
			   	  	<h4>Love</h4>
			   	  	<p>Children need love and affection because it helps them feel safe, comforts them, helps them feel accepted and builds self-esteem.</p>
			   	  </div>
			   	  <div class="clearfix"> </div>
			   </div>
			   <div class="col-md-4 bann-strip-grid">
			   	  <div class="col-md-4 b-strip-left">
			   	  	<span class="glyphicon glyphicon-eye-open hovicon effect-4 sub-b" aria-hidden="true"> </span>
			   	  </div>
			   	  <div class="col-md-8 b-strip-right">
			   	  	<h4>Protection</h4>
			   	  	<p>All children have the right to be protected from violence, exploitation and abuse. Yet, thousands of ... Children around sri lanka need your help right now.</p>
			   	  </div>
			   	  <div class="clearfix"> </div>
			   </div>
			   <div class="col-md-4 bann-strip-grid">
			   	  <div class="col-md-4 b-strip-left">
			   	  	 <span class="glyphicon glyphicon-education hovicon effect-4 sub-b" aria-hidden="true"> </span>
			   	  </div>
			   	  <div class="col-md-8 b-strip-right">
			   	  	 <h4>Education</h4>
			   	  	 <p>Yet many children in need around sri lanka do not get a quality education where they can learn and develop. You can support them. </p>
			   	  </div>
			   	  <div class="clearfix"> </div>
			   	</div>
				<div class="clearfix"> </div>
				</div>
	</div>
</div>
<!--vedio block start here-->
<div class="vedio">
	<div class="container">
		<div class="vedio-main">
			<div class="col-md-6 vedio-left wow fadeInLeft" data-wow-delay="0.3s">
				<h2>WHO WE ARE</h2>
				<p>
					Outstanding stewardship is more than a priority at Compassion. It’s a passion and deeply held value.
					Compassion is committed to investing every single rupee into front-line ministry. In fact, when you gave to Compassion this past year, 82.4 percent of expenses went to programs that directly benefit children and other people in need.
				</p>
			</div>
			<div class="col-md-6 vedio-right wow fadeInRight" data-wow-delay="0.3s">
				<div class="img-box"><img src="<?php echo base_url(); ?>compassion/images/img2.jpg" alt=""></div>

			</div>
		  <div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--vedio block end here-->
<!--charity strip start here-->
<div class="charity">
	<div class="container">
		<div class="charity-main wow fadeInRight" data-wow-delay="0.3s">
			<h3>GIVE TO THE MOST URGENT NEEDS</h3>
			<p>
				We organize special fund raising campaigns when there is a critical situations like flooding, landslides and droughts.
			</p>
			<br>
			<p id = "inner">
				If you can't feed hundred people, then feed just one.<br>
				- Mother Teresa -
			</p>
		</div>
	</div>
</div>
<!--charity strip end here-->
<!--donate start here-->
<div class="donayte">
	<div class="container">
		<div class="donate-main">
			<div class="col-md-3 donate-grid wow fadeInLeft" data-wow-delay="0.3s">
				<h2>Donate Our Charity</h2>
				<h3>Even small donations have an impact on their lives.</h3>
				<p>When giving to an effective charity, the size of your donation directly correlates with the number of people you are able to help. But you don't have to be a millionaire to make a significant difference.</p>
			</div>
			<div class="col-md-3 donate-grid wow fadeInLeft" data-wow-delay="0.3s">
				<div class="fall-down-effect top">
							<div class="img-box"><img src="<?php echo base_url(); ?>compassion/images/d1.jpg" alt=""></div>
							<div class="text-box">
								<div class="text-content">
									<h2>Help</h2>																																		
								</div>
							</div>
						</div>
				<h5>Giving benefits the sri lanka's neediest people.</h5>	
				<p>There are hundreds of non-profits that you can choose to give to, but we can gurantee that your donation debit to our charity.</p>
			</div>
			<div class="col-md-3 donate-grid wow fadeInRight" data-wow-delay="0.3s">
				<div class="fall-down-effect top">
							<div class="img-box"><img src="<?php echo base_url(); ?>compassion/images/d2.jpg" alt=""></div>
							<div class="text-box">
								<div class="text-content">
									<h2>Help</h2>																																		
								</div>
							</div>
						</div>
				<h5>Giving makes you happier.</h5>		
				<p>Research has shown that spending money on ourselves does not significantly increase our sense of happiness or wellbeing.</p>			
			</div>
			<div class="col-md-3 donate-grid wow fadeInRight" data-wow-delay="0.3s">
				<div class="fall-down-effect top">
							<div class="img-box"><img src="<?php echo base_url(); ?>compassion/images/d3.jpg" alt=""></div>
							<div class="text-box">
								<div class="text-content">
									<h2>Help</h2>																																		
								</div>
							</div>
						</div>
				<h5>Help Desk</h5>		
				<p>We organize seminars for O/L and A/L Students to improve their knowledge and support for their education.</p>
			</div>
		</div>
	</div>
</div>
<!--donate end here-->

<!--footer start here-->
<div class="footer">
	<div class="container">
		<div class="footer-main">
			<div class="col-md-4 ftr-grid wow zoomIn" data-wow-delay="0.3s">
				<h3>Navigation</h3>
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Events</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</div>
		
			<div class="col-md-4 ftr-grid wow zoomIn" data-wow-delay="0.3s">
				<h3>Keep In Touch</h3>
				<div class="ftr-icons">
			    	  	 <div class="ftr-iblock">
			        	   <span class="glyphicon glyphicon-map-marker">  </span>
			        	 </div>
			        	 <div class="ftr-text">
			        	 	<p>UCSC exploration club</p>
			        	 </div>
			        	 <div class="clearfix"> </div>
			   </div>
			   <div class="ftr-icons">
			    	  	 <div class="ftr-iblock">
			        	   <span class="glyphicon glyphicon-earphone">  </span>
			        	 </div>
			        	 <div class="ftr-text">
			        	 	<p>071 755 5765</p>
			        	 </div>
			        	 <div class="clearfix"> </div>
			   </div>
			   <div class="ftr-icons">
			    	  	 <div class="ftr-iblock">
			        	   <span class="glyphicon glyphicon-envelope">  </span>
			        	 </div>
			        	 <div class="ftr-text">
			        	 	<p><a href="#">hirukirana.e.s.f@gmail.com</a></p>
			        	 </div>
			        	 <div class="clearfix"> </div>
			   </div>
			</div>
			<div class="clearfix"> </div>		
		</div>
	</div>
</div>
<!--footer end here-->
<!--copy rights start here-->
<div class="copy-right">
	<div class="container">
		 <div class="copy-rights-main wow zoomIn" data-wow-delay="0.3s">
    	    <p>© 2016 Compassion. All Rights Reserved.</p>
    	 </div>
    </div>
</div>
<!--copy right end here-->
</body>
</html>		 