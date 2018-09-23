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
	<div class="header1">
   <div class="container">
     <div class="header-main">
	   <div class="logo">
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
    </div>
    <div class="righttop">
    	<?php	
    	$name = $this->session->userdata('name');
    	?>
    	

    	<a href="<?php echo base_url(); ?>index.php/dashboard/log_out" class="btn btn-info btn-lg pull-right" id="login" role="button">Logout</a>
	</div>
  </div>
<div class="top-nav-main">
<div class="top-nav">
            	<span class="menu"> <img src="<?php echo base_url(); ?>compassion/images/icon.png" alt=""></span>	
				<ul class="res">
					<li><a href="<?php echo base_url(); ?>index.php/Home"><i class="glyphicon glyphicon-home"> </i>Home</a></li>
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
</div>	
<!--banner end here-->

<!--team start here-->
<div class="team">
	<div class="container">
		<div class="panel panel-primary ">
			            <div class="panel-heading">
			              <h3 class="panel-title">MY PROFILE</h3>
			            </div>
			            <div class="panel-body">
						<?php
			            	if($error !='')
			            {
			            ?>		
			            	<div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <?php echo $error;?>
                            </div>
                        <?php }?>
			            	<div class="welcome_profile_picture" id="pro_pic">
								<center>
									<?php if($profile != NULL)
									{
									?>
					                	<img src = "<?php echo base_url(); ?>compassion/profile_pic/<?php echo $profile ?>" alt="img" class="profile_profile_image_new">
					                
					                	<!--
							    		<div class=".welcome_new_propic" id="pro_pic_text">
						                	<?php //echo form_open_multipart('Profile/do_upload/profile_view');?>
						        			<input type="file" style="display: none" accept="image/*" name="pro_pic_img" id="pro_pic_img" >
						                	<input type="button" class="btn btn-default btn-xs" value="Browse" style="font-size: .9em; margin-top:10px;"  onclick="document.getElementById('pro_pic_img').click();"><br>
						                	<input type="submit" class="btn btn-default btn-xs" value="Upload" style="font-size: .9em; margin-top:5px;"/>
						                	</form>
						            	</div>
						            	-->

					                <?php 
					                	}
					                	else
					                	{
					                ?>

					 				<div class="welcome_new_propic" id="pro_pic_text">
					                    Upload Image
					                    <br>
					                	<?php echo form_open_multipart('Profile/do_upload/profile_view');?>
					        			<input type="file" style="display: none" accept="image/*" name="pro_pic_img" id="pro_pic_img" >
					                	<input type="button" class="btn btn-default btn-xs" value="Browse" style="font-size: .7em;"  onclick="document.getElementById('pro_pic_img').click();"><br>
					                	<input type="submit" class="btn btn-default btn-xs" value="Upload" style="font-size: .7em; margin-top:5px;"/>
					                	</form>
						            </div>
					                <?php
					                	}
					                ?>

					            </center>
        					</div>
        					<br>
			            	<div class="profile_data">
			            		<a href="<?php echo base_url(); ?>index.php/Profile/edit_profile" class="btn btn-1 btn-primary pull-right" id="edit_pro" role="button">Edit Profile</a>
			            		<p class="profile_name" style =""><?php echo $name; ?></p>
			            		
			            		<br>
			            		Email 		: <?php echo $email; ?><br>
			            		Address 	: <?php echo $address; ?><br>
			            		Contact No 	: <?php echo $contact; ?><br>
			            		District	: <?php echo $district; ?><br>
			            		Occupation	: <?php echo $occupation; ?>
        					</div>
			            </div> 
		          	</div>

	<div class="team-main">
	<div class="col-lg-8">
    <div class="panel panel-default">
    <div class="panel-heading">
    <h3><b>Donations you have made to Compassion.</b></h3>
    </div>
    <!-- /.panel-heading -->
    <div class="panel-body">
         <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                    	<th>Date</th>
                    	<th>Donation Type</th>
                        <th>Amount</th>
                        <th>Payment Method</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php    foreach ($records as $row){   ?>
                        <tr>
                            <td><?php echo $row->date;?></td>
                            <td><?php echo $row->donationType;?></li></a></td>
                            <td><?php echo $row->amount;?></td>
                            <td><?php echo $row->paymentMethod;?></td>
                            <td><a href="<?php echo base_url(); ?>index.php/Profile/edit_donation_data/<?php echo $row->donationID; ?>" class="btn btn-primary pull-right " >Update</a></td>
                        </tr>
                     <?php } ?>
                </tbody>
           	</table>
        </div>
    <!-- /.table-responsive -->
    </div>
    <!-- /.panel-body -->
    </div>
    <!-- /.panel -->
	</div>

	<!-- Request Table Start Here -->
	<div class="col-lg-12">
    <div class="panel panel-default">
    <div class="panel-heading">
    <h3><b>Requests you have made to Compassion.</b></h3>
    </div>
    <!-- /.panel-heading -->
    <div class="panel-body">
         <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                    	<th>Date</th>
                    	<th>Request Type</th>
                        <th>Amount</th>
                        <th>Message</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php    foreach ($request as $row){   ?>
                        <tr>
                            <td><?php echo $row->date;?></td>
                            <td><?php echo $row->requestType;?></li></a></td>
                            <td><?php echo $row->amount;?></td>
                            <td><?php echo $row->message;?></td>
                            <td><?php echo $row->status;?></td>
                            <td><a href="<?php echo base_url(); ?>index.php/Profile/edit_request_data/<?php echo $row->requestID;?>" class="btn btn-primary pull-right <?php if($row->status=='accept') echo "disabled";?>" >Update</a></td>
                        </tr>
                     <?php } ?>
                </tbody>
           	</table>
        </div>
    <!-- /.table-responsive -->
    </div>
    <!-- /.panel-body -->
    </div>
    <!-- /.panel -->
	</div>
	</div>
		</div>
</div>
<!--team end here-->
<!--footer start here-->
<div class="footer">
	<div class="container">
		<div class="footer-main">
			<div class="col-md-4 ftr-grid wow zoomIn" data-wow-delay="0.3s">
				<h3>Navigation</h3>
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="shortcodes.html">Short Codes</a></li>
					<li><a href="blog.html">Blog</a></li>
					<li><a href="contact.html">Contact</a></li>
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
<script type="text/javascript">
	// Function for Preview Image.
        $(function() {
            $("#pro_pic_img").change(function() {
                if (this.files && this.files[0]) {
                    var reader = new FileReader();
                    reader.onload = imageIsLoaded;
                    reader.readAsDataURL(this.files[0]);

                }
            });

        });
        function imageIsLoaded(e) {
            $('#pro_pic').css('background-image', 'url('+e.target.result+')');
        }
</script>


</body>
</html>	