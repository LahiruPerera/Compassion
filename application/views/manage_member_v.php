<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>System Admin</title>

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

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">System Administrator</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url(); ?>index.php/dashboard/log_out"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>index.php/dashboard"><i class="fa fa-file-o fa-fw"></i> View Donation Request</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>index.php/view_place_donation"><i class="fa fa-file-o fa-fw"></i> View Place Donation</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-group fa-fw"></i> Manage members<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url(); ?>index.php/manage_member/search">View members</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li> 
                        <li>
                            <a href="#"><i class="fa fa-calendar fa-fw"></i> Manage Events<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url(); ?>index.php/Welcome/go_search">Search Event</a>
                                </li>
                                <li>
        
                                    
                                    <a href="<?php echo base_url(); ?>index.php/Welcome/go_to">Add Event</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">View members</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-sm-6 col-lg-12">
                        <form role = "form" method="post" action="<?php echo base_url(); ?>index.php/manage_member/search">
                            <div class="form-group col-lg-6">
                                <label>Enter a name you want to search : </label>
                                <input class="form-control" placeholder="Enter Name" name="name">
                                <br>    
                                <button type="submit" class="btn btn-primary pull-right ">SEARCH</button>
                                <br> 
                                <br> 
                            </div>
                        </form>
                    </div>
                </div>

                <?php  
                    if(($this->input->post('name')!=NULL) and $records !=NULL)
                    {
                ?>

                    <div class="col-lg-12">
                          <div class="panel panel-default">
                            <div class="panel-heading">
                             Member Details
                            </div>
                             <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead> 
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>District</th>
                                                <th>Occupation</th>
                                                <th></th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                        <?php    foreach ($records as $row){   ?>
                                             <tr>
                                                <td><?php echo $row->memberID;?></td>
                                                <td><?php echo $row->name;?></li></a></td>
                                                <td><?php echo $row->email;?></td>
                                                <td><?php echo $row->district;?></td>
                                                <td><?php echo $row->occupation;?></td>
                                                <td><a href="<?php echo base_url(); ?>index.php/manage_member/deleteMember/<?php echo $row->memberID?>" class="btn btn-danger btn-xs pull-right " >Delete</a></td>
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
                <?php
                } 
                 
                elseif(($this->input->post('name')!=NULL) and $records ==NULL)
                {
                ?>
                <div class="alert alert-danger alert-dismissable col-sm-8 col-lg-6">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="false">&times;</button>
                    There is no registered member with the given name.
                </div>

                <?php
                }
                ?>

                       
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

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