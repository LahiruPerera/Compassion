<!DOCTYPE html>
<html lang="en">
<?php 
    $email = $this->session->userdata('email');
    //echo $email;
?>
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
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Administrator
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
                            <a href="<?php echo base_url(); ?>index.php/dashboard"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
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
                                    <a href="<?php echo site_url('Welcome/go_search');?>">Search Events</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('Welcome/go_to');?>">Add Event</a>
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

   
          <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Search Events</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-sm-6 col-lg-12">
                        <form role = "form" method="post" action="<?php echo site_url("Welcome/NameSearch"); ?>">
                            <div class="form-group col-lg-6">
                                <label>Enter a event name you want to search : </label>
                                <input class="form-control" placeholder="Enter Name" name="eventname">
                                <br>    
                                <button type="submit" class="btn btn-primary pull-right ">SEARCH</button>
                                <br> 
                                <br> 
                            </div>
                        </form>
                    </div>
                </div>
      

      <?php
            if(($y==1) or ($y==3))
            {
              if($x!=0)
              {
                ?>
              <table class="table">
                <th>Event ID</th>
                <th>Event Name</th>
                <th>Date</th>
                <th>Time</th>
                <th>Venue</th>
                <th>Comments</th>
                <th>Action</th>

              
              <?php
              }
              else
              {?>
                <div style="background-color:#ff8080;">
                  <center>
                    <h4 style="padding:1%";>
                      No match found
                    </h4>
                    
                  </center>
                </div>
              <?php
              }
              foreach($q->result() as $row)
              {?>
                  <tr class="info">
                    <td>
                      <?php
                      $id=$row->eventID;
                      echo $id?>
                    </td>
                    <td>
                      <?php echo $row->eventName;?>
                    </td>
                    <td>
                      <?php
                      echo $row->date;?>
                    </td>
                    <td>
                      <?php
                      echo $row->time;?>
                    </td>
                    <td>
                      <?php echo $row->venue;?>
                    </td>
                    <td>
                      <?php echo $row->description;?>
                    </td>
                    <td>
                      <a href="<?php echo site_url('Welcome/update_eve')?>/<?php echo $id?>" class="btn btn-success"><div class="glyphicon glyphicon-pencil"> Update</div></a>
                      <a href="<?php echo site_url('Welcome/delete_eve')?>/<?php echo $id?>" class="btn btn-danger"><div class="glyphicon glyphicon-trash"> Delete</div></a>
                    </td>
                  </tr>
                
              <?php
              }
            }?>
            </table>
            <?php 
            if($y==2)
            {?>
                <div style="background-color:#f44b42;">
                  <center>
                    <h4 style="padding:1%";>
                      Event Successfully Deleted
                    </h4>
                    
                  </center>
                </div>
                <?php
            }
            if($y==3)
              {?>
                  <center  style="margin-left:250px; margin-right:250px;">
                    <div class="row">
                        <div class="col-sm-6 col-lg-12">
                            <form role = "form" method="post" action="<?php echo site_url("Welcome/upd");?>/<?php echo $p;?>">
                                <div class="form-group col-lg-6">
                                    <label>Event Name : </label>
                                    <input class="form-control" name="eventname" placeholder="Enter Event Name">
                                    <br>
                                    <label>Date : </label>
                                    <input class="form-control" type="date" name="date" placeholder="Enter Date">
                                    <br>
                                    <label>Time : </label>
                                    <input class="form-control" type="time" name="time" placeholder="Enter Time">
                                    <br>
                                    <label>Venue : </label>
                                    <input class="form-control" name="place" placeholder="Enter Venue">
                                    <br>
                                    <label>Comments : </label>
                                    <textarea class="form-control" name="comments" id="comments" rows="5" cols="60"></textarea>
                                    <br>
                                    <button type="submit" class="btn btn-primary pull-right ">Submit</button>
                                    <br> 
                                    <br> 
                                </div>
                            </form>
                        </div>
                    </div>
                  </center>
                  <?php

              }
              ?>
            </table>
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