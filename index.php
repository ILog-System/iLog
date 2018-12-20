<!DOCTYPE html>
<html ng-app="app" ng-controller="MainCtrl as main">
<head>
	<title>UCLM ILSA</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="node_modules/bootstrap-float-label/dist/bootstrap-float-label.min.css">
	<link rel="stylesheet" type="text/css" href="node_modules/jquery-timepicker/jquery.timepicker.css">
	<link rel="stylesheet" type="text/css" href="node_modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
	<link rel="stylesheet" type="text/css" href="node_modules/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="Assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="Assets/css/sidebar.css">
</head>
<body>


		<!-- Sidebar -->
		<div class="w3-sidebar w3-bar-block w3-animate-left " style="display:none;z-index:5" id="mySidebar">
			<button class="w3-bar-item w3-button w3-large" onclick="w3_close()"><img src="Assets/img/cat.jpg" style="width: 150px;"> </button>
			<a href="#!register" class="w3-bar-item w3-button">Register Account</a>
      <a href="#!employee" class="w3-bar-item w3-button">Employee list</a>
			<a href="#!report" class="w3-bar-item w3-button">Report</a>
			<div class="dropdown">
				<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
					Account Settings
					<span class="caret"></span>
				</button>
				<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
					<li><a href="#" data-toggle="modal" data-target="#myModal">User Profile</a></li>
					<li role="separator" class="divider"></li>
					<li><a href="#">Log out</a></li>
				</ul>
			</div>
		</div>
		<!-- Page Content -->
		
<div id="main">
	<div class="w3-overlay w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" id="myOverlay"></div>
		<div>
			<nav class="navbar navbar-default navbar-fixed-top" id="nav"> 
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<button class="w3-button w3-medium" id="openNav" onclick="w3_open()" style="padding-top: 15px;">&#9776;</button>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<a class="navbar-brand" href="#">iLog</a>
							<li><a href="#!home">Home<span class="sr-only">(current)</span></a></li>
							<li class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="#!login">Log in</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="#!signup">Sign up</a></li>
								</ul>
							</li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<div class="input-group input-group-sm bootstrap-datepicker" style="width: 150px; padding-top: 10px; padding-right: 20px;">
								<span class="input-group-addon" id="sizing-addon3"><i class="fa fa-calendar"></i></span>
								<input type="text" id="datepicker" class="form-control" aria-describedby="sizing-addon3">
							</div>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
			<ui-view></ui-view>
		</div>
		<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog" style="padding-top: 100px;">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Profile</h4>
        </div>
        <div class="modal-body">
          <form>
          	<div class="row" style="padding: 10px;">
          		<div class="form-group has-float-label" id="forms">
          			<div class="col-md-6">
          				<input type="text" 
          				class="form-control" 
          				id="idNumber" 
          				ng-model="idNumber"
          				placeholder="12345678" style="font-size: 15px;padding-left: 15px;">
          				<label style="font-size: 15px;" for="idNumber" id="idNumber" style="padding-left: 25px;">ID number</label>
          			</div>
          			<div class="col-md-6">
          				<input type="text" 
          				class="form-control" 
          				id="firstname" 
          				ng-model="firstname"
          				placeholder="Ana" style="font-size: 15px;padding-left: 15px;">
          				<label style="font-size: 15px;" for="firstname" id="firstname">First name</label>
          			</div>
          		</div>
          	</div>
          	<div class="row" style="padding: 10px;">
          		<div class="form-group has-float-label">
          			<div class="col-md-6">
          				<input type="text" 
          				class="form-control" 
          				id="lastname" 
          				ng-model="lastname"
          				placeholder="Reid" style="font-size: 15px;padding-left: 15px;">
          				<label style="font-size: 15px;" for="lastname" id="lastname">Last name</label>
          			</div>
          			<div class="col-md-6">
          				<input type="text" 
          				class="form-control" 
          				id="middlename" 
          				ng-model="middlename"
          				placeholder="Lustre" style="font-size: 15px;padding-left: 15px;">
          				<label style="font-size: 15px;" for="middlename" id="middlename">Middle name</label>
          			</div>
          		</div>
          	</div>
          	<div class="row" style="padding: 10px;">
          		<div class="form-group">
          			<div class="col-md-6">
          				<select required class="form-control" id="position"
          				ng-model="position">
          				<option value=""
          				hidden
          				>Position</option>

          				<!-- normal options -->
          				<option value="1">Admin</option>
          			</select>
          			</div>
          			<div class="col-md-6">
          				<select required class="form-control" id="gender"
          				ng-model="gender">
          				<option value=""
          				hidden
          				>Gender</option>

          				<!-- normal options -->
          				<option value="1">Female</option>
          				<option value="2">Male</option>
          			</select>
          			</div>
          		</div>
          	</div>
          	<div class="row" style="padding:10px;">
          		<div class="form-group has-float-label">
          			<div class="col-md-6">
          				<input type="email" 
          				class="form-control" 
          				id="email" 
          				ng-model="email"
          				placeholder="@" style="font-size: 15px;padding-left: 15px;">
          				<label style="font-size: 15px;" for="email" id="email">Email</label>
          			</div>
          			<div class="col-md-6">
          				<input type="text" 
          				class="form-control" 
          				id="contact" 
          				ng-model="contact"
          				placeholder="09123456789" style="font-size: 15px;padding-left: 15px;">
          				<label style="font-size: 15px;" for="contact" id="contact">Contact Number</label>
          			</div>
          		</div>
          	</div>
          	<div class="row" style="padding: 10px;">
          		<div class="form-group has-float-label">
          			<div class="col-md-6">
          				<input type="password" 
          				class="form-control" 
          				id="password" 
          				ng-model="password"
          				placeholder="••••••••" style="font-size: 15px;padding-left: 15px;">
          				<label style="font-size: 15px;" for="password" id="password">Password</label>
          			</div>
          			<div class="col-md-6">
          				<input type="password" 
          				class="form-control" 
          				id="confirmPassword" 
          				ng-model="confirmPassword"
          				placeholder="••••••••" style="font-size: 15px;padding-left: 15px;">
          				<label style="font-size: 15px;" for="confirmPassword" id="confirmPassword">Confirm password</label>
          			</div>
          		</div>
          	</div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Edit</button>
        </div>
      </div>
      
    </div>
  </div>
</div>


	<script>
		function w3_open() {
			document.getElementById("mySidebar").style.display = "block";
			document.getElementById("myOverlay").style.display = "block";
			document.getElementById("main").style.marginLeft = "200px";
			document.getElementById("nav").style.marginLeft = "200px";
			document.getElementById("openNav").style.display = 'none';
		}
		function w3_close() {
			document.getElementById("mySidebar").style.display = "none";
			document.getElementById("myOverlay").style.display = "none";
			document.getElementById("nav").style.marginLeft = "0";
			document.getElementById("main").style.marginLeft = "0";
			document.getElementById("openNav").style.display = "inline-block";
		}
	</script>
	

	<!--imported scripts  -->
	<script src="node_modules/jquery/dist/jquery.min.js"></script>
	<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="node_modules/angular/angular.min.js"></script>
	<script src="node_modules/angular-ui-router/release/angular-ui-router.min.js"></script>
	<script src="node_modules/jquery-timepicker/jquery.timepicker.js"></script>
	<script src="assets/js/datepicker/js/bootstrap-datepicker.js"></script>
  <script src="node_modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
  <script src="node_modules/webcam/dist/webcam.min.js"></script>
  <script src="node_modules/webcamjs/webcam.js"></script>
	<!-- <script src="node_modules/webcamjs/webcam.swf"></script> -->


	<!-- local scripts -->
	<script src="assets/js/app.js"></script>
	<script src="assets/js/controllers/mainctrl.js"></script>
	<script src="assets/js/controllers/landingctrl.js"></script>
	<script src="assets/js/controllers/signupctrl.js"></script>
	<script src="assets/js/controllers/homectrl.js"></script>
	<script src="assets/js/controllers/registerctrl.js"></script>
  <script src="assets/js/controllers/employeectrl.js"></script>
	<script src="assets/js/controllers/reportctrl.js"></script>

</body>
</html>

<!-- <button class="w3-button w3-medium" onclick="w3_open()">&#9776;</button>
			<a href="#" class="navbar-brand">iLog</a> -->