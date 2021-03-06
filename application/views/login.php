<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Compassion</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url(); ?>admin/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>admin/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <a href="<?php echo base_url(); ?>index.php/Home" class="btn btn-lg btn-link pull-left" id="back" role="button"><span class="glyphicon glyphicon-arrow-left"></span> Back to Home</a>
    <br>
    <div class="container">

        <div class="row">

            <div class="col-md-4 col-md-offset-3">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">LOGIN TO CONTINUE</h3>
                    </div>
                    <div class="panel-body">
                        <form action="<?php echo base_url(); ?>index.php/login/login_user" method="POST" role="form">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" class="btn btn-lg btn-success btn-block">Login</button>
                            <!--
                                <a href="index.html" class="btn btn-lg btn-success btn-block">Login</a>
                            -->
                            </fieldset>
                        </form>
                        <div>
                            <!-- <?//= isset($errors)?$errors:'';?> -->
                            <?php 
                            if(isset($errors))
                            { ?>
                            <div class="alert alert-danger alert-dismissable ">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="false">&times;</button>
                                <?= isset($errors)?$errors:'';?>
                            </div>

                            <?php }

                            ?>
                        </div>
                        <a href="<?php echo base_url(); ?>index.php/Home/signUp" class="btn btn-lg btn-link pull-left" id="back" role="button">Don't have an account ?</a>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>admin/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>admin/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>admin/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url(); ?>admin/dist/js/sb-admin-2.js"></script>

</body>

</html>
