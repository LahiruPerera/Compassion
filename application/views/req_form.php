
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
<meta name="keywords" content="Donate Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Karla:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Archivo+Narrow:400,700' rel='stylesheet' type='text/css'>
<!--google fonts-->
</head>
<body>
<!--banner start here-->
<div class="banner1">
	<div class="header">
   <div class="container">
     <div class="header-main">
	   <div class="logo">
	     <h1><a href="index.html">Compassion</a></h1>
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
    </div>
    <div class="righttop">
  <a href="<?php echo base_url(); ?>index.php/dashboard/log_out" class="btn btn-info btn-lg pull-right" id="login" role="button">Logout</a>
</div>
  </div>
<div class="top-nav">
            	<span class="menu"> <img src="images/icon.png" alt=""></span>	
				<ul class="res">
					<li><a href="<?php echo base_url(); ?>index.php/Home"><i class="glyphicon glyphicon-home"> </i>Home</a></li>
					<li><a href="about.html"><i class="glyphicon glyphicon-user"> </i>About</a></li>					
					<li><a href="blog.html"><i class="glyphicon glyphicon-picture"> </i>Events</a></li>
					
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
<!--banner end here-->
<!--contact start here-->

<div class="contact" id="contact">
			<div class="container">
				<div class="contact-top">
					<h3>Request Donation</h3>					
				</div>
				 <form action="http://localhost/Compassion/index.php/Req_form_controller/insert_data" method="post">
					<div class="contact-grid">
						<div class="col-md-6 contact-us">
							
      							<select name="type" class="form-control" id="sel1" required>
        							<option value="" disabled selected>Donation Type</option>
        							<option value="WhereMostNeeded">Where Most Needed</option>
        							<option value="UnsponseredChildren">Unsponsered Children</option>
        							<option value="HealthPrograms">Health Programs</option>
      							</select>
						</div>
						<div class="col-md-12 contact-us">
							<input type="text" name="" hidden>
						</div>
					
						<div class="col-md-12 contact-us">
							<input type="text" name="" hidden>
						</div>
						<div class="col-md-6 contact-us">
							<input type="text" name="amount" placeholder="Amount" required>
						</div>
						<div class="col-md-8 contact-us">
							<textarea name="message" placeholder="Message"></textarea>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="contact-grid">
						<div class="clearfix"> </div>
					</div>
					<div class="send">
						<input type="submit" value="SEND">
					</div>
				</form>
				<div class="contact-bottom">
					<div class="col-md-7 main-map">
						
						<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="<?php echo base_url(); ?>compassion/images/req.jpg" alt="Chania" width="1140" height="745">
      </div>

      <div class="item">
        <img src="<?php echo base_url(); ?>compassion/images/o-DONATIONS-facebook.jpg" alt="Chania" width="1140" height="345">
      </div>
   
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
						<span class="map-icon"> </span>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			
		</div>
<!--contact end here-->
<!--footer start here-->
<div class="footer">
	<div class="container">
		<div class="footer-main">
			<div class="col-md-4 ftr-grid">
				<h3>Navigation</h3>
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="blog.html">Blog</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</div>
			<div class="col-md-4 ftr-grid">
				<h3>Keep In Touch</h3>
				<div class="ftr-icons">
			    	  	 <div class="ftr-iblock">
			        	   <span class="glyphicon glyphicon-map-marker">  </span>
			        	 </div>
			        	 <div class="ftr-text">
			        	 	<p>UCSC Exploration Club.</p>
			        	 </div>
			        	 <div class="clearfix"> </div>
			   </div>
			   <div class="ftr-icons">
			    	  	 <div class="ftr-iblock">
			        	   <span class="glyphicon glyphicon-earphone">  </span>
			        	 </div>
			        	 <div class="ftr-text">
			        	 	<p>+12 894 8579</p>
			        	 </div>
			        	 <div class="clearfix"> </div>
			   </div>
			   <div class="ftr-icons">
			    	  	 <div class="ftr-iblock">
			        	   <span class="glyphicon glyphicon-envelope">  </span>
			        	 </div>
			        	 <div class="ftr-text">
			        	 	<p><a href="mailto:info@example.com">lorem@example.com</a></p>
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
		 <div class="copy-rights-main">
    	    <p>© 2016 Donate. All Rights Reserved.</p>
    	 </div>
    </div>
</div>
<!--copy right end here-->
</body>
</html>