



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
<script>$document.ready(function(){
	$("form").submit(function(){
		alert("Thank you! Confirm your donation");
	});
});

	</script>
<div class="contact" id="contact">
			<div class="container">
				<div class="contact-top">
					<h3>Donate</h3>					
				</div>
				 <form action="http://localhost/Compassion/index.php/PlaceDonation/insert_data" method="post" style="align:center;">
					<div class="contact-grid">
						<div class="col-sm-12 contact-us">
							<input type="text" name="amount" placeholder="Amount" id="amount" required>
							<!--input type="text" placeholder="Amount"   name="amount" id="amount" class="form-control" required/-->
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="contact-grid">
						<div class="col-sm-4 contact-us">
					<select name="paymentMethod" id="paymentMethod" class="form-control" required  >
								<option value="" disabled selected > Payment Method</option>
								<option value="cash" >Cash</option>
								<option value="cheque" >Cheque</option>
								<option value="other" >Other</option>			
							</select>
							</div>
							
						<div class="col-sm-4 contact-us">
					<select name="donationType" class="form-control"  id="donationType"class="form-control"   >
									<option value="" disabled selected > Donation Type </option>
									<option value="WhereMostNeeded" >Where Most Needed </option>
									<option value="DisasterRelief" >Disaster Relief</option>
									<option value="UnsponseredChildren" >Unsponsered Clildren</option>
									<option value="HealthPrograms">Health Programs</option>
									<!--option value="Constructions">Constructions</option-->
								</select>
							</div>
							
						<div class="col-sm-4 contact-us">
							<input type=radio name="paymentFrequency" value=once   style="margin-right:10px;margin-left:80px"required/>Once 
							<input type=radio name="paymentFrequency" value=monthly style="margin-right:10px;margin-left:80px " required/>Monthly
						</div>
						
						<div class="clearfix"> </div>
					</div>
					<textarea name="comment" placeholder="Comment" ></textarea>
					<div class="send">
						<input type="submit"  value="SEND">
					</div>
				</form>
				<!--div class="contact-bottom">
					<div class="col-md-5 sit-contact">
						<h5>Lorem ipsum dolor sit</h5>
						<div class="contact-add">
							<p>consectetur adipiscing</p>
							<p>ncididunt ut 795-4378</p>
							<p>(586)769-9037</p>
						</div>
						<ul class="face">
							<li class="active"><a href="#">facebook </a><span>/</span></li>
							<li><a href="#">twitter </a><span>/</span></li>
							<li><a href="#">linkedin </a><span>/</span></li>
							<li><a href="#">dribbble</a></li>
						</ul>
					</div>
					<div class="col-md-7 main-map">
						<div class="map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4944817.221906753!2d-6.8106824852535865!3d52.75994898863402!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d0a98a6c1ed5df%3A0xf4e19525332d8ea8!2sEngland%2C+UK!5e0!3m2!1sen!2sin!4v1461331759355" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
						<span class="map-icon"> </span>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			
		</div-->
<!--contact end here-->
<!--footer start here-->
<!--p></p><p></p>
<div class="footer">
	<div class="container">
		<div class="footer-main">
			<div class="col-md-4 ftr-grid">
				<h3>Navigation</h3>
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="shortcodes.html">Short Codes</a></li>
					<li><a href="blog.html">Blog</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</div>
			<div class="col-md-4 ftr-grid">
				<h3>Latest Tweet</h3>
				<div class="tweets">
					<div class="tweet-icon">
						<span class="tweet-img"> </span>
					</div>
					<div class="tweet-text">
						<p>Lorem ipsum</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur But I must explain to you how all this mistaken.</p>
			</div>
			<div class="col-md-4 ftr-grid">
				<h3>Keep In Touch</h3>
				<div class="ftr-icons">
			    	  	 <div class="ftr-iblock">
			        	   <span class="glyphicon glyphicon-map-marker">  </span>
			        	 </div>
			        	 <div class="ftr-text">
			        	 	<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
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
</div-->
<!--footer end here-->
<!--copy rights start here-->
<div><br><br><br></div>
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