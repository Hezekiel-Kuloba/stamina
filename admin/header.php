<?php
ob_start();
session_start();
include("inc/config.php");
include("inc/functions.php");
include("inc/CSRF_Protect.php");
$csrf = new CSRF_Protect();
$error_message = '';
$success_message = '';
$error_message1 = '';
$success_message1 = '';

// Check if the user is logged in or not
if(!isset($_SESSION['user'])) {
	header('location: login.php');
	exit;
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Admin Panel</title>

	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/ionicons.min.css">
	<link rel="stylesheet" href="css/datepicker3.css">
	<link rel="stylesheet" href="css/all.css">
	<link rel="stylesheet" href="css/select2.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.css">
	<link rel="stylesheet" href="css/jquery.fancybox.css">
	<link rel="stylesheet" href="css/AdminLTE.min.css">
	<link rel="stylesheet" href="css/_all-skins.min.css">
	<link rel="stylesheet" href="css/on-off-switch.css"/>
	<link rel="stylesheet" href="css/summernote.css">
	<link rel="stylesheet" href="style.css">

</head>

<body class="hold-transition fixed skin-blue sidebar-mini">

	<div class="wrapper">

		<header class="main-header">

			<a href="index.php" class="logo">
				<span class="logo-lg">Kevin Fitness Club.com</span>
			</a>

			<nav class="navbar navbar-static-top">
				
				<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
					<span class="sr-only">Toggle navigation</span>
				</a>

				<span style="float:left;line-height:50px;monday_schedule:#fff;padding-left:15px;font-sunday_schedule:18px;">Admin Panel</span>
    <!-- Top Bar ... User Inforamtion .. Login/Log out Area -->
				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<li class="dropdown user user-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<img src="../assets/uploads/<?php echo $_SESSION['user']['photo']; ?>" class="user-image" alt="User Image">
								<span class="hidden-xs"><?php echo $_SESSION['user']['full_name']; ?></span>
							</a>
							<ul class="dropdown-menu">
								<li class="user-footer">
									<div>
										<a href="profile-edit.php" class="btn btn-default btn-flat">Edit Profile</a>
									</div>
									<div>
										<a href="logout.php" class="btn btn-default btn-flat">Log out</a>
									</div>
								</li>
							</ul>
						</li>
					</ul>
				</div>

			</nav>
		</header>

  		<?php $cur_page = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1); ?>
<!-- Side Bar to Manage Shop Activities -->
  		<aside class="main-sidebar">
    		<section class="sidebar">
      
      			<ul class="sidebar-menu">

			        <li class="treeview <?php if($cur_page == 'index.php') {echo 'active';} ?>">
			          <a href="index.php">
			            <i class="fa fa-hand-o-right"></i> <span>Dashboard</span>
			          </a>
			        </li>

			        <li class="treeview <?php if( ($cur_page == 'gallery_settings.php') ) {echo 'active';} ?>">
			          <a href="gallery_settings.php">
			            <i class="fa fa-hand-o-right"></i> <span>Course Settings</span>
			          </a>
			        </li>
			        <li class="treeview <?php if( ($cur_page == 'user_settings.php') ) {echo 'active';} ?>">
			          <a href="user_settings.php">
			            <i class="fa fa-hand-o-right"></i> <span>Clients Settings</span>
			          </a>
			        </li>
			        <li class="treeview <?php if( ($cur_page == 'header_settings.php') ) {echo 'active';} ?>">
			          <a href="header_settings.php">
			            <i class="fa fa-hand-o-right"></i> <span>Header Settings</span>
			          </a>
			        </li>

			        <li class="treeview <?php if( ($cur_page == 'trainer_settings.php') ) {echo 'active';} ?>">
			          <a href="trainer_settings.php">
			            <i class="fa fa-hand-o-right"></i> <span>Trainer Settings</span>
			          </a>
			        </li>
			        <li class="treeview <?php if( ($cur_page == 'pricing_settings.php') ) {echo 'active';} ?>">
			          <a href="pricing_settings.php">
			            <i class="fa fa-hand-o-right"></i> <span>Pricing Settings</span>
			          </a>
			        </li>
			        <li class="treeview <?php if( ($cur_page == 'contact_settings.php') ) {echo 'active';} ?>">
			          <a href="contact_settings.php">
			            <i class="fa fa-hand-o-right"></i> <span>Contact Settings</span>
			          </a>
			        </li>
			        <li class="treeview <?php if( ($cur_page == 'schedule_settings.php') ) {echo 'active';} ?>">
			          <a href="schedule_settings.php">
			            <i class="fa fa-hand-o-right"></i> <span>Schedule settings</span>
			          </a>
			        </li>
			        <li class="treeview <?php if( ($cur_page == 'footer_settings.php') ) {echo 'active';} ?>">
			          <a href="footer_settings.php">
			            <i class="fa fa-hand-o-right"></i> <span>Footer Settings</span>
			          </a>
			        </li>
			        <li class="treeview <?php if( ($cur_page == 'blog_settings.php') ) {echo 'active';} ?>">
			          <a href="blog_settings.php">
			            <i class="fa fa-hand-o-right"></i> <span>Blog Settings</span>
			          </a>
			        </li>
					<li class="treeview <?php if( ($cur_page == 'sunday_schedule.php') || ($cur_page == 'monday_schedule.php') || ($cur_page == 'tuesday_schedule.php') || ($cur_page == 'wednesday_schedule.php') || ($cur_page == 'thursday_schedule.php') || ($cur_page == 'friday_schedule.php')  || ($cur_page == 'saturday_schedule.php') ) {echo 'active';} ?>">
                        <a href="#">
                            <i class="fa fa-hand-o-right"></i>
                            <span>Schedule Settings</span>
                            <span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="sunday_schedule.php"><i class="fa fa-circle-o"></i> sunday_schedule</a></li>
                            <li><a href="monday_schedule.php"><i class="fa fa-circle-o"></i> monday_schedule</a></li>
                            <li><a href="tuesday_schedule.php"><i class="fa fa-circle-o"></i> tuesday_schedule</a></li>
                            <li><a href="wednesday_schedule.php"><i class="fa fa-circle-o"></i> wednesday_schedule</a></li>
                            <li><a href="thursday_schedule.php"><i class="fa fa-circle-o"></i> thursday_schedule</a></li>
                            <li><a href="friday_schedule.php"><i class="fa fa-circle-o"></i> friday_schedule</a></li>
                            <li><a href="saturday_schedule.php"><i class="fa fa-circle-o"></i> Saturday_schedule</a></li>
                        </ul>
                    </li>

                    
      			</ul>
    		</section>
  		</aside>

  		<div class="content-wrapper">