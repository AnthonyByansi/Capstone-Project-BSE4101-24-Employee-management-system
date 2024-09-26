@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Add employees</title>

<link rel="shortcut icon" href="assets/img/favicon.png">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/css/style.css">
<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
</head>
<body>

<div class="main-wrapper">

<div class="header" style ="display : none">

<div class="header-left">
<a href="index.html" class="logo">
<img src="assets/img/logo.png" alt="Logo">
</a>
<a href="index.html" class="logo logo-small">
<img src="assets/img/logo-small.png" alt="Logo" width="30" height="30">
</a>
<a href="javascript:void(0);" id="toggle_btn">
<span class="bar-icon">
<span></span>
<span></span>
<span></span>
</span>
</a>
</div>




<div class="top-nav-search">
<form>
<input type="text" class="form-control" placeholder="">
<button class="btn" type="submit"><i class="fas fa-search"></i></button>
</form>
</div>


<a class="mobile_btn" id="mobile_btn">
<i class="fas fa-bars"></i>
</a>


<ul class="nav user-menu">
<li class="nav-item dropdown has-arrow main-drop">
<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
<span class="user-img">
<img src="assets/img/profile.jpg" alt="">
<span class="status online"></span>
</span>
<span>Kavin Hansen</span>
</a>
<div class="dropdown-menu">
<a class="dropdown-item" href="profile.html"><i data-feather="user" class="mr-1"></i> Profile</a>
<a class="dropdown-item" href="settings.html"><i data-feather="settings" class="mr-1"></i> Settings</a>
<a class="dropdown-item" href="login.html"><i data-feather="log-out" class="mr-1"></i> Logout</a>
</div>
</li>

</ul>
<div class="dropdown mobile-user-menu show">
<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
<div class="dropdown-menu dropdown-menu-right ">
<a class="dropdown-item" href="profile.html">My Profile</a>
<a class="dropdown-item" href="settings.html">Settings</a>
<a class="dropdown-item" href="login.html">Logout</a>
</div>
</div>

</div>


<div class="sidebar" id="sidebar">
<div class="sidebar-inner slimscroll">
<div class="sidebar-contents">
<div id="sidebar-menu" class="sidebar-menu">
<div class="mobile-show">
<div class="offcanvas-menu">
<div class="user-info align-center bg-theme text-center">
<span class="lnr lnr-cross  text-white" id="mobile_btn_close">X</span>
<a href="javascript:void(0)" class="d-block menu-style text-white">
<div class="user-avatar d-inline-block mr-3">
<img src="assets/img/profiles/avatar-18.jpg" alt="user avatar" class="rounded-circle" width="50">
</div>
</a>
</div>
</div>
<div class="sidebar-input">
<div class="top-nav-search">
<form>
<input type="text" class="form-control" placeholder="Search here">
<button class="btn" type="submit"><i class="fas fa-search"></i></button>
</form>
</div>
</div>
</div>
<ul>
<li>
<a href="/index"><img src="assets/img/home.svg" alt="sidebar_img"> <span>Dashboard</span></a>
</li>
<li class="active">
<a href="/employee"><img src="assets/img/employee.svg" alt="sidebar_img"><span> Employees</span></a>
</li>
<li>
<a href="/leave"><img src="assets/img/leave.svg" alt="sidebar_img"> <span>Leave</span></a>
</li>

<li>
<a href="/profile-settings"><img src="assets/img/settings.svg" alt="sidebar_img"><span>Settings</span></a>
</li>
<li>
<a href="/profile-detail"><img src="assets/img/profile.svg" alt="sidebar_img"> <span>Profile</span></a>
</li>
</ul>
</div>
</div>
</div>
</div>


<div class="page-wrapper">
<div class="content container-fluid">
<div class="row">
<div class="col-xl-12 col-sm-12 col-12 ">
<div class="breadcrumb-path mb-4">
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item active"> Employees</li>
</ul>
<h3>Create Employees</h3>
</div>
</div>


<form  action="/data" method ="post"  >
	@csrf


<div class="col-xl-12 col-sm-12 col-12 ">



<p style="color:red">{{session('message')}}</p>
<div class="card">

<div class="card-header">
<h2 class="card-titles">Basic Details <span>Organized and secure.</span></h2>
</div>
<div class="card-body">
<div class="row">
<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<input type="text" name="fname" placeholder="First Name">
</div>
</div>
<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<input type="text"name="lname" placeholder="Last Name">
</div>
</div>
</div>
<div class="row">
<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<input type="text" name ="email" placeholder="Email">
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-12 col-sm-12 col-12 ">
<div class="card ">
<div class="card-header">
<h2 class="card-titles">Employment Details<span>Let everyone know the essentials so they're fully prepared.</span></h2>
</div>
<div class="card-body">
<div class="row">
<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">

<input type ="text" name = "country" placeholder ="Country of Employment"/>

</div>
</div>
<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<input type="text" name= "wsd" placeholder="Working Start Date (yyyy-mm-dd)">
</div>
 </div>
</div>
<div class="row">
<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<input type="text" name ="jobtitle"placeholder="Job Title">
</div>
</div>
<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<select name ="jobtype" >
<option value="Freelancer" >Job type</option>
<option value="Permanent"  >Permanent	</option>
<option value="Freelancer">Freelancer</option>
</select>
</div>
</div>
</div>

<div class="row">
<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">

<input type ="text" name ="office" placeholder ="Office"/>

</div>
</div>
<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<select name ="team" >
<option value="Android" >Team</option>
<option value="IOS" >IOS</option>
<option value="PHP" >PHP</option>
<option value="Designing" >Designing</option>
<option value="Business" >Business</option>
<option value="Testing" >Testing</option>
<option value="Android" >Android</option>
</select>
</div>
 </div>
</div>


</div>
</div>
</div>
<div class="col-xl-12 col-sm-12 col-12 ">
<div class="card">
<div class="card-header">
<h2 class="card-titles">Salary Details<span>Stored securely, only visible to Super Admins, Payroll Admins, and themselves.</span></h2>
</div>
<div class="card-body">
<div class="row">
<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<select name ="currency" >
<option value="Select leave">Currency </option>
<option value="dollars">$</option>
<option value="shillings">shs</option>
</select>
</div>
</div>
<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<select name ="frequency" >
<option value="Monthly" selected >Frequency </option>
<option value="Annualy">Annualy</option>
<option value="Monthly">Monthly</option>
<option value="Weekly">Weekly</option>
<option value="Daily">Daily</option>
</select>
</div>
</div>
</div>
<div class="row">
<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<input type="text" name ="psd" placeholder="Payment Start Date (yyyy-mm-dd)">
</div>
</div>


<div class="col-xl-6 col-sm-12 col-12 ">
<div class="form-group">
<select name ="salary" >
<option value="Android" >Select team to determine salary</option>
<option value="500000" >IOS</option>
<option value="400000" >PHP</option>
<option value="350000" >Designing</option>
<option value="450000" >Business</option>
<option value="250000" >Testing</option>
<option value="600000" >Android</option>
</select>
</div>
 </div>
</div>



</div>
</div>
</div>
<div class="row">
<div class="col-xl-12 col-sm-12 col-12 ">
<div class="form-btn">
<input type="submit" style ="padding : 18px" class="btn btn-apply w-auto" value ="Add Employee"/>
<a href="/employee" class="btn btn-secondary">Cancel</a>
</div>
</div>
</div>

</form>


</div>
</div>
</div>
</div>

</div>



<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/feather.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="assets/plugins/select2/js/select2.min.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>
@endsection