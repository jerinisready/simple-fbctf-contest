<?php require_once('Connections.php'); ?>
<?php if (!isset($_SESSION)) {
  session_start();
}
if(isset($_SESSION)){
	if($_SESSION['current_user_type']!=='admin'){
	header("Location: access_denied.php"  );
	}
}?>
<!DOCTYPE HTML>
<html>
<head>
<title>ADMIN : HOME</title>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="web/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="web/css/style.css" rel='stylesheet' type='text/css' />
<link href="web/css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="web/css/icon-font.min.css" type='text/css' />
<script src="web/js/Chart.js"></script>
<link href="web/css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="web/js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<script src="web/js/jquery-1.10.2.min.js"></script>
</head> 
   
 <body class="sticky-header left-side-collapsed"  onload="initMap()">
    <section>
		<div class="left-side sticky-left-side">
		<div class="logo">
				<h1><a href="home.php">Easy <span>Admin</span></a></h1>
			</div>
			<div class="logo-icon text-center">
				<a href="home.php"><i class="lnr lnr-home"></i> </a>
			</div>

			<!--logo and iconic logo end-->
			<div class="left-side-inner">

				<!--sidebar nav start-->
					<ul class="nav nav-pills nav-stacked custom-nav">
						<li class="active"><a href="home.php"><i class="lnr lnr-power-switch"></i><span>Dashboard</span></a></li>
						<!-- ROOT SETTINGS-->
                        <li class="menu-list">
							<a href="#"><i class="lnr lnr-cog"></i>
								<span>Root Settings</span></a>
								<ul class="sub-menu-list">
									<li><a href="register_state.php">ADD STATE</a></li>
									<li><a href="update_table_input.php">EDIT LOGIN DETAILS</a></li>
								</ul>
						</li>
                        
					<!--	<li><a href="forms.html"><i class="lnr lnr-spell-check"></i> <span>Forms</span></a></li>   -->
						<li><a href="#"><i class="lnr lnr-menu"></i>
                        		 <span>Common List</span></a>
                        		<ul class="sub-menu-list">
									<li><a href="update_rate.php">Manage Rate</a></li>
									<li><a href="item_table.php">Manage Items</a></li>
								</ul>
                        </li>
                        
                                      
						<li class="menu-list"><a href="#"><i class="lnr lnr-envelope"></i>
                         <span>MailBox</span></a>
							<ul class="sub-menu-list">
								<li><a href="complaints.php">Inbox</a> </li>
								<li><a href="compose-mail.php">Compose Mail</a></li>
							</ul>
						</li>      
						<li class="menu-list"><a href="#"><i class="lnr lnr-indent-increase"></i> <span>Monthly List</span></a>  
							<ul class="sub-menu-list">
								<li><a href="display_expaired.php">Expaired Items</a> </li>
								<li><a href="stock_admin.php">Stock Details</a> </li>
							</ul>
						</li>
						<li><a href="#"><i class="lnr lnr-select"></i> <span>Monthly Computation</span></a>
							<ul class="sub-menu-list">
								<li><a href="compute_expairy.php">Remove Expaired Items</a> </li>
								<li><a href="requirement_analysis_1.php">Analyse Requirement</a></li>
								<li><a href="stock.php">Distribute Stock</a></li>
							</ul>
						</li>
					</ul>
				<!--sidebar nav end-->
			</div>
		</div>
		<!-- left side end-->
    
		<!-- main content start-->
		<div class="main-content">
			<!-- header-starts -->
			<div class="header-section">
			 
			<!--toggle button start-->
			<a class="toggle-btn  menu-collapsed"><i class="fa fa-bars"></i></a>
			<!--toggle button end-->

			<!--notification menu start -->
			<div class="menu-right">
				<div class="user-panel-top">  	
					<div class="profile_details_left">
						<ul class="nofitications-dropdown">
							<li class="dropdown">
                		    <?php   $query="SELECT * FROM tbl_complaints WHERE status=0  ORDER BY `feedback_id` DESC";
									$data=mysqli_query($conn,$query);
									$no_of_mails=0;
									while($mail=mysqli_fetch_array($data,MYSQLI_BOTH))	{
										$no_of_mails++;
										}
								echo '<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge">'.$no_of_mails.'</span></a>	<ul class="dropdown-menu">' ?>
											<li>
												<div class="notification_header">
													<h3>You have some new messages</h3>
												</div>
											</li>
											
									<?php 
									$query="SELECT * FROM tbl_complaints WHERE status=0";
									$data=mysqli_query($conn,$query);
									while($mail=mysqli_fetch_array($data,MYSQLI_BOTH))	{
									echo	'<li><a href="view_complaints">
											   <div class="user_img"><img src="web/images/1.png" alt=""></div>
											   <div class="notification_desc">
												<p>'.$mail['complaint'].'</p>
												<p><span>'.$mail['user_type'].', '.$mail['date'].'</span></p>
												</div>
											   <div class="clearfix"></div>	
											 </a></li>';
											 }
				echo '		 </ul>
							</li>
							<li class="login_box" id="loginContainer">
									<div class="search-box">
										<div id="sb-search" class="sb-search">';
                                         
										if(isset($_POST['submit'])){
										echo "<script type='text/javascript' language='Javascript'>
												window.open('https://www.google.co.in/#q=".trim($_GET['search']).')';
										echo "</script>";
										}
										?>
                                        
											<form type='get'>
												<input class="sb-search-input" placeholder="GOOGLE SEARCH..." type="search" name=searchid="search">
												<input class="sb-search-submit" type="submit" value="" name='submit'>
												<span class="sb-icon-search"> </span>
											</form>
										</div>
									</div>
										<!-- search-scripts -->
										<script src="web/js/classie.js"></script>
										<script src="web/js/uisearch.js"></script>
											<script>
												new UISearch( document.getElementById( 'sb-search' ) );
											</script>
										<!-- //search-scripts -->
							</li>	
									   							   		
							<div class="clearfix"></div>	
						</ul>
					</div>
					<div class="profile_details">		
						<ul>
							<li class="dropdown profile_details_drop">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<div class="profile_img">	
										<span style="background:url(web/images/1.jpg) no-repeat center"> </span> 
										 <div class="user-name">
											<p>DIGIRATS<span>Administrator</span></p>
										 </div>
										 <i class="lnr lnr-chevron-down"></i>
										 <i class="lnr lnr-chevron-up"></i>
										<div class="clearfix"></div>	
									</div>	
								</a>
								<ul class="dropdown-menu drp-mnu">
								<!--<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
									<li> <a href="#"><i class="fa fa-user"></i>Profile</a> </li> -->
									<li> <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
								</ul>
							</li>
							<div class="clearfix"> </div>
						</ul>
					</div>		
					<div class="social_icons">
						<div class="col-md-4 social_icons-left">
							<a href="https://www.facebook.com/" class="yui"><i class="fa fa-facebook i1"></i><span>FaceBook</span></a>
						</div>
						<div class="col-md-4 social_icons-left pinterest">
							<a href="https://plus.google.com/"><i class="fa fa-google-plus i1"></i><span>GOOGLE<sup>+</sup></span></a>
						</div>
						<div class="col-md-4 social_icons-left twi">
							<a href="https://www.twitter.com/"><i class="fa fa-twitter i1"></i><span>Twitter</span></a>
						</div>
						<div class="clearfix"> </div>
					</div>            	
					<div class="clearfix"></div>
				</div>
			  </div>
			<!--notification menu end -->
			</div>
		<!-- //header-ends -->
			<div id="page-wrapper">
				<div class="graphs">
				  <!-- switches -->
	  <div class="switches">
			<div class="col-4">
				<div class="col-md-4 switch-right">
					<div class="switch-right-grid">
						<div class="switch-right-grid1">
							<h3>DATE :<?php echo date('r');?></h3>
							<p><?php echo $_SESSION['current_user_type']; ?></p>
							<p>Calender NOTEs : No work for today.</p>
							<p>#next expairy clearance on 31st March.</p>
					  </div>
					</div>
					<div class="sparkline">
						<canvas id="line" height="150" width="480" style="width: 480px; height: 150px;"></canvas>
							<script>
									var lineChartData = {
										labels : ["Mon","Tue","Wed","Thu","Fri","Sat","Mon"],
										datasets : [
											{
												fillColor : "#fff",
												strokeColor : "#F44336",
												pointColor : "#fbfbfb",
												pointStrokeColor : "#F44336",
												data : [20,35,45,30,10,65,40]
											}
										]
										
									};
									new Chart(document.getElementById("line").getContext("2d")).Line(lineChartData);
							</script>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<!-- //switches -->
		<div class="col_1">
		  <div class="clearfix"> </div>
			
		</div>
			  </div>
			<!--body wrapper start-->
			</div>
			 <!--body wrapper end-->
		</div>
        <!--footer section start-->
			<footer>
			   <p>©DIGIRATS Corporation 2016 - MINI PROJECT GROUP 6 CEK</p>
			</footer>
        <!--footer section end-->

      <!-- main content end-->
   </section>
  
<script src="web/js/jquery.nicescroll.js"></script>
<script src="web/js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="web/js/bootstrap.min.js"></script>
</body>
</html>