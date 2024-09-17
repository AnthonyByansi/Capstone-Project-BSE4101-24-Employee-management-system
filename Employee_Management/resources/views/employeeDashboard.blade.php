@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Employee dashboard</title>

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
<div class="main-wrapper" >
<div class="header"style ="display : none">
<div class="header-left">
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
<a href="/index"><img src="assets/img/home.svg" alt="sidebar_img"> <span>Dashboard</span></a>
</li>

<li>
<a href="/emp-leave"><img src="assets/img/leave.svg" alt="sidebar_img"> <span>Leave</span></a>
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


<div class="page-wrapper" >
<div class="content container-fluid" >
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
</div> 


</h4>
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
<h3>Employee Dashboard</h3>
</div>
</div>
<div class="col-xl-6 col-sm-12 col-12">
<div class="row">
<div class="col-xl-6 col-sm-6 col-12">
<a class="btn-dash" href="#">Employee Dashboard</a>
</div>
</div>
</div>
</div>
@foreach($team as $tea)
<div class="row mb-4">
<div class="col-xl-3 col-sm-6 col-12">
<div class="card board1 fill1 ">
<div class="card-body">
<div class="card_widget_header">	
<label>Team</label>
<h4>{{$tea->team}}</h4>
</div>
<div class="card_widget_img">
<img src="assets/img/dash1.png" alt="card-img" />
</div>
</div>
</div>
</div>
@endforeach
<div class="col-xl-3 col-sm-6 col-12">
<div class="card board1 fill3 ">
<div class="card-body">
<div class="card_widget_header">
<label>Leaves</label>
<h4>{{$num}}</h4>
</div>
<div class="card_widget_img">
<img src="assets/img/dash3.png" alt="card-img" />
</div>
</div>
</div>
</div>
@foreach($team as $tea)
<div class="col-xl-3 col-sm-6 col-12">
<div class="card board1 fill4 ">
<div class="card-body">
<div class="card_widget_header">
<label>Salary</label>
<h4>shs &nbsp {{$tea->salary}}</h4>
</div>
<div class="card_widget_img">
<img src="assets/img/dash4.png" alt="card-img" />
</div>
</div>
</div>
</div>
</div>
@endforeach

<div class="row">
<div class="col-xl-6 col-sm-12 col-12 d-flex">
<div class="card card-list flex-fill">
<div class="card-header ">
<h4 class="card-title-dash">Your Upcoming Leaves</h4>
<div class="dropdown">
<button class="btn btn-action " type="button" id="roomsBtn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="fas fa-ellipsis-h"></i>
</button>
<div class="dropdown-menu" aria-labelledby="roomsBtn">
<a class="dropdown-item" href="/emp-leave">Action</a>
</div>
</div>
</div>
<div class="card-body p-0">

@foreach($up as $u)
<div class="leave-set">
<span class="leave-active">
<i class="fas fa-briefcase"></i>
</span>
<label>{{$u ->l_from}}</label>
</div>
@endforeach



<div class="leave-viewall">
<a href="/leave">View all <img src="assets/img/right-arrow.png" class="ml-2" alt="arrow" /></a>
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