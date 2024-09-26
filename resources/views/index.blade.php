@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Employee management system</title>

<link rel="shortcut icon" href="assets/img/favicon.png">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

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
<a href="#" class="logo">
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
<li class="active">
<a href="#"><img src="assets/img/home.svg" alt="sidebar_img"> <span>Dashboard</span></a>
</li>
<li>
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
<div class="page-name 	mb-4">
<h4 class="m-0">
	
<div class="header-left">
<a href="javascript:void(0);" id="toggle_btn">
<span class="bar-icon">
<span></span>
<span></span>
<span></span>
</span>
</a>
</div>    </h4>

<label><?php echo date("d / m / Y")  ?></label>
</div>


<div class="row mb-4">
<div class="col-xl-6 col-sm-12 col-12">
<div class="breadcrumb-path ">
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html"><img src="assets/img/dash.png" class="mr-3" alt="breadcrumb" />Home</a>
</li>
<li class="breadcrumb-item active">Dashboard</li>
</ul>
<h3>Admin Dashboard</h3>
</div>
</div>
<div class="col-xl-6 col-sm-12 col-12">
<div class="row">
<div class="col-xl-6 col-sm-6 col-12">
<a class="btn-dash" href="#"> Admin Dashboard</a>
</div>
</div>
</div>
</div>
<div class="row mb-4">
<div class="col-xl-3 col-sm-6 col-12">
<div class="card board1 fill1 ">
<div class="card-body">
<div class="card_widget_header">
<label>Employees</label>
<h4>{{$num}}</h4>
</div>
<div class="card_widget_img">
<img src="assets/img/dash1.png" alt="card-img" />
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-sm-6 col-12">
<div class="card board1 fill2 ">
<div class="card-body">
<div class="card_widget_header">

<label>Leaves</label>
<h4>{{$leaves}}</h4>
</div>
<div class="card_widget_img">
<img src="assets/img/dash3.png" alt="card-img" />
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-sm-6 col-12">
<div class="card board1 fill4 ">
<div class="card-body">
<div class="card_widget_header">
<label>Grand Salary</label>
<h4>{{$sal}}</h4>
</div>
<div class="card_widget_img">
<img src="assets/img/dash4.png" alt="card-img" />
</div>
</div>
</div>
</div>
</div>

<div class="row">
<div class="col-xl-6 col-sm-12 col-12 d-flex">
<div class="card card-list flex-fill">
<div class="card-header ">
<h4 class="card-title">Total Salary By Team</h4>
</div>

<div class="card-body">
@foreach($salary as $sal )
<div class="team-list">
<div class="team-view">
<div class="team-img">
</div>
<div class="team-content">
<label>{{$sal->team}}</label>
<span>shs &nbsp {{$sal->salary}}</span>
</div>
</div>
<div class="team-action">
</div>
</div>
@endforeach
</div>
</div>
</div>






<div class="col-xl-3 col-sm-12 col-12 d-flex">
<div class="card card-list flex-fill">
<div class="card-header">
<div class="">	
<h4 class="card-title"> Normal users</h3>
</div>
</div>

<div class="card-body dash-activity">

<div class="slimscroll activity_scroll">
@foreach($users as $user)
<div class="activity-set">
<div class="activity-content">
<label name = "id" value= "{{$user->id}}">{{$user -> name}}</label>
<a href="/makeadmin/{{$user->id}}"><input value ="Make Admin" onclick="return confirm('Are you sure You want to make this user an admin?')" style ="cursor : pointer; width :60%; padding:2px;"  class="ed-btn"/></a>
<li><a class="delete-link" href="/delete-user/{{$user->id}}"><i data-feather="trash-2"onclick="return confirm('Are you sure You want to delete this user?')"></i></a></li>
</div>
</div>
@endforeach
</div>
</div>
</div>
</div>



<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/feather.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="assets/plugins/apexchart/apexcharts.min.js"></script>
<script src="assets/plugins/apexchart/chart-data.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>
@endsection