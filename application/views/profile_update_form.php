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
   
  </div>    
</div>  
<!--banner end here-->

<!--team start here-->
<div class="team">
  <div class="container">

    <!--Profile update form start here-->
    <?php 
      if($x==1)
      {
      if(isset($error) && $error!=1)
      { 
               
    ?>
    <div class="alert alert-danger" role="alert">
      <strong><?php echo $error; ?></strong> 
    </div>
    <?php }
          ?>

    <div class="welcome_profile_picture2" id="pro_pic_edit" style="background-image: url('<?php echo base_url(); ?>compassion/profile_pic/<?php echo $profile ?>')">
                <center>
                  <div class="welcome_new_propic" id="pro_pic_text">
                              Upload Image
                              <br>
                            <?php echo form_open_multipart('Profile/do_upload/profile_update_form');?>
                        <input type="file" style="display: none" accept="image/*" name="pro_pic_img" id="pro_pic_img" >
                            <input type="button" class="btn btn-default btn-xs" value="Browse" style="font-size: .7em;"  onclick="document.getElementById('pro_pic_img').click();"><br>
                            <input type="submit" class="btn btn-default btn-xs" value="Upload" style="font-size: .7em; margin-top:5px;"/>
                            </form>
                        </div>
                </center>
    </div>
    <br>
    <h2>Edit Your Profile Details</h2><br>
    <div class="bs-example" data-example-id="simple-horizontal-form">
      
      <form class="form-horizontal" action="<?php echo base_url(); ?>index.php/Profile/save_edit_data" method="post">
        <div class="form-group">
          <label for="Name" class="col-sm-2 control-label">Name</label>
          <div class="col-sm-10 col-md-6">
            <input type="text" class="form-control" name="name" value="<?php echo $name; ?>">
          </div>
        </div>
     
        <div class="form-group">
          <label for="Email" class="col-sm-2 control-label">Email</label>
          <div class="col-sm-10 col-md-6">
            <input type="email" class="form-control" name="email" value="<?php echo $email; ?>">
          </div>
        </div>

        <div class="form-group">
          <label for="Address" class="col-sm-2 control-label">Address</label>
          <div class="col-sm-10 col-md-6">
            <input type="text" class="form-control" name="address" value="<?php echo $address; ?>">
          </div>
        </div>

        <div class="form-group">
          <label for="Contact" class="col-sm-2 control-label">Contact No</label>
          <div class="col-sm-10 col-md-6">
            <input type="text" class="form-control" name="contact" value="<?php echo $contact; ?>">
          </div>
        </div>

        <div class="form-group">
          <label for="District" class="col-sm-2 control-label">District</label>
          <div class="col-sm-10 col-md-6">
            <input type="text" class="form-control" name="district" value="<?php echo $district; ?>">
          </div>
        </div>

        <div class="form-group">
          <label for="Occupation" class="col-sm-2 control-label">Occupation</label>
          <div class="col-sm-10 col-md-6">
            <input type="text" class="form-control" name="occupation" value="<?php echo $occupation; ?>">
          </div>
        </div>
        <br>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Save Changes</button>
          </div>
        </div>
      </form>
    </div> 
    <?php
  }
    ?> 

    <!--Place Donation Update Form start here-->
    <?php 
      if($x==2)
      {
      if(isset($error) && $error!=1)
      { 
               
    ?>
    <div class="alert alert-danger" role="alert">
      <strong><?php echo $error; ?></strong> 
    </div>
    <?php }
          ?>
    <h2>Edit Your Place Donation Details</h2><br>
    <div class="bs-example" data-example-id="simple-horizontal-form">
      
      <form class="form-horizontal" action="<?php echo base_url(); ?>index.php/Profile/save_edit_donation_data/<?php echo $donationID; ?>" method="post">

        <div class="form-group">
          <label for="Date" class="col-sm-2 control-label">Date</label>
          <div class="col-sm-10 col-md-6">
            <input type="text" class="form-control" name="date" value="<?php echo $date; ?>">
          </div>
        </div>

         <div class="form-group">
          <label for="Donation Type" class="col-sm-2 control-label">Donation Type</label>
          <div class="col-sm-10 col-md-6">
                <select class="form-control" name="donationType">
                  <option value="WhereMostNeeded" <?php if($donationType=="WhereMostNeeded") echo "selected=\"selected\""; ?> >Where Most Needed</option>
                  <option value="DisasterRelief" <?php if($donationType=="DisasterRelief") echo "selected=\"selected\""; ?> >Disaster Relief</option>
                  <option value="UnsponseredChildren" <?php if($donationType=="UnsponseredChildren") echo "selected=\"selected\""; ?> >Unsponsered Clildren</option>
                  <option value="HealthPrograms" <?php if($donationType=="HealthPrograms") echo "selected=\"selected\""; ?> >Health Programs</option>
                </select>                         
          </div>
        </div> 

        <div class="form-group">
          <label for="Amount" class="col-sm-2 control-label">Amount</label>
          <div class="col-sm-10 col-md-6">
            <input type="text" class="form-control" name="amount" value="<?php echo $amount; ?>">
          </div>
        </div>
     
        <div class="form-group">
          <label for="Payment Method" class="col-sm-2 control-label">Payment Method</label>
          <div class="col-sm-10 col-md-6">
             <select class="form-control" name="paymentMethod">
                  <option value="cash" <?php if($paymentMethod=="cash") echo "selected=\"selected\""; ?> >Cash</option>
                  <option value="cheque" <?php if($paymentMethod=="cheque") echo "selected=\"selected\""; ?> >Cheque</option>
                  <option value="other" <?php if($paymentMethod=="other") echo "selected=\"selected\""; ?> >Other</option>
                </select> 
          </div>
        </div>

        <div class="form-group">
          <label for="Pay" class="col-sm-2 control-label">Pay</label>
              <input type=radio name="paymentFrequency" value=once   style="margin-right:10px;margin-left:80px" <?php if($paymentFrequency =="once") echo "checked=\"\"";?> />Once 
              <input type=radio name="paymentFrequency" value=monthly style="margin-right:10px;margin-left:80px" <?php if($paymentFrequency =="monthly") echo "checked=\"\"";?> />Monthly
        </div>

        <div class="form-group">
          <label for="Comment" class="col-sm-2 control-label">Comment</label>
          <div class="col-sm-10 col-md-6">
            <textarea class="form-control" rows="3" name="comment"><?php echo $comment; ?></textarea>
          </div>
        </div>
        <br>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Save Changes</button>
          </div>
        </div>
      </form>
    </div> 
    <?php
  }
    ?> 


    <!--Request Donation Update Form start here-->
        <?php 
      if($x==3)
      {
      ?>  
    <h2>Edit Your Donation Request Details</h2><br>
    <div class="bs-example" data-example-id="simple-horizontal-form">
      
      <form class="form-horizontal" action="<?php echo base_url(); ?>index.php/Profile/save_edit_request_data/<?php echo $requestID; ?>" method="post">
        <div class="form-group">
          <label for="Date" class="col-sm-2 control-label">Date</label>
          <div class="col-sm-10 col-md-6">
            <input type="text" class="form-control" name="date" value="<?php echo $date; ?>">
          </div>
        </div>
     
        <div class="form-group">
          <label for="Request Type" class="col-sm-2 control-label">Request Type</label>
          <div class="col-sm-10 col-md-6">
                <select class="form-control" name="requestType">
                  <option value="WhereMostNeeded" <?php if($requestType=="WhereMostNeeded") echo "selected=\"selected\""; ?> >Where Most Needed</option>
                  <option value="DisasterRelief" <?php if($requestType=="DisasterRelief") echo "selected=\"selected\""; ?> >Disaster Relief</option>
                  <option value="UnsponseredChildren" <?php if($requestType=="UnsponseredChildren") echo "selected=\"selected\""; ?> >Unsponsered Clildren</option>
                  <option value="HealthPrograms" <?php if($requestType=="HealthPrograms") echo "selected=\"selected\""; ?> >Health Programs</option>
                </select>                         
          </div>
        </div>

        <div class="form-group">
          <label for="Amount" class="col-sm-2 control-label">Amount</label>
          <div class="col-sm-10 col-md-6">
            <input type="text" class="form-control" name="amount" value="<?php echo $amount; ?>">
          </div>
        </div>

        <div class="form-group">
          <label for="Message" class="col-sm-2 control-label">Message</label>
          <div class="col-sm-10 col-md-6">
            <textarea class="form-control" rows="3" name="message"><?php echo $message; ?></textarea>
          </div>
        </div> 
        <br>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Save Changes</button>
          </div>
        </div>
      </form>
    </div> 
    <?php
  }
    ?>


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