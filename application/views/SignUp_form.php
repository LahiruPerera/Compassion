<!DOCTYPE HTML>
<html>
<head>
<title>Compassion</title>
<link href="<?php echo base_url(); ?>compassion/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo base_url(); ?>compassion/js/jquery-1.11.0.min.js"></script>
<!-- Custom Theme files -->
<link href="<?php echo base_url(); ?>compassion/css/style.css" rel="stylesheet" type="text/css" media="all"/>


</head>
<body id ="BG_image">
<div class="container">
	<div>
		<a href="<?php echo base_url(); ?>index.php/Home" class="btn btn-lg btn-link pull-left" id="back" role="button">Back to Home</a>
				<?php 
                if(isset($error) && $error!=1)
                { 
               
                	?>
                <div class="alert alert-danger" role="alert">
		        <strong><?php echo $error; ?></strong> 
		      	</div>
                <?php }
                ?>
                <?php 
                if(isset($success))
                { 
               
                	?>
                <div class="alert alert-success" role="alert">
        		<strong><?php echo $success; ?></strong>
        		</div>
                <?php }
                ?>
   				
<div class="contact" id="contact">
	<div class="row">
		<div class="col-xs-12 col-xs-offset-0 col-sm-6 col-lg-4 col-sm-offset-4 box">
			
			<div class="contact-top" text-center>
				<h3>Sign Up</h3>					
			</div>
			<form action="<?php echo base_url(); ?>index.php/Home/get_signup" method="post" style="padding-bottom:30px;">
				
					<div class=" contact-us">
						<input type="text" name="name" placeholder="Name" class="form-control" required>
					</div>
			
					<div class=" contact-us">
						<input type="email" name="email" placeholder="Email" class="form-control" required>
					</div>
					
					<div class=" contact-us">
						<textarea name="address" placeholder="Address" class="form-control" ></textarea>
					</div>

					<div class=" contact-us">
						<input type="text" name="contact" placeholder="Contact No" class="form-control" required>
					</div>

					<div class=" contact-us">
						<input type="text" name="district" placeholder="District" class="form-control" required>
					</div>

					<div class=" contact-us">
						<input type="text" name="occupation" placeholder="Occupation" class="form-control" required>
					</div>

					<div class=" contact-us">
						<input type="password" name="password1" placeholder="Password" class="form-control" required>
					</div>
					<br>
					<div class=" contact-us">
						<input type="password" name="password2" placeholder="Retype Password" class="form-control" required>
					</div>
					<br>
					<div class="send">
						<button type="submit" class="btn btn-md btn-success " >Submit</button>
					</div>
			</form>
		</div>
			
	</div>
</div>
</div>	

</body>
</html>