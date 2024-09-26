@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Leaves</title>

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

<div class="header"style ="display : none">

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
<li>
<a href="/employee"><img src="assets/img/employee.svg" alt="sidebar_img"><span> Employees</span></a>
</li>

<li class="active">
<a href="#"><img src="assets/img/leave.svg" alt="sidebar_img"> <span>Leave</span></a>
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
<div class="col-xl-12 col-sm-12 col-12 mb-4">
<div class="breadcrumb-path ">
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html"><img src="assets/img/dash.png" class="mr-2" alt="breadcrumb">Home</a>
</li>
<li class="breadcrumb-item active"> Leave</li>
</ul>
<h3>Leave</h3>
</div>
</div>
</div>


<div class="row">
<div class="col-xl-12 col-sm-12 col-12 ">
<div class="card">
<div class="card-header">
<h2 class="card-titles">Leave Details</h2>
</div>
<div class="card-body p-0">
<div class="table-responsive">
<table class="table  custom-table  no-footer">
<thead>
<tr>
<th>Date</th>
<th>Total Employees	</th>
<th>Total number of leaves	</th>
<th>Pending leaves</th>
<th>Approved leaves</th>
</tr>
</thead>
<tbody>
<tr>
<td><label><?php echo date("d / m / Y")  ?></label></td>
<td><label>{{$num}} </label></td>
<td><label>{{$numl}}</label></td>
<td><label>{{$pend}} </label></td>
<td><label>{{$app}} </label></td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-xl-12 col-sm-12 col-12 ">
<div class="card ">
<div class="card-header">
<h2 class="card-titles">Pending Leaves</h2>
</div>
<div class="card-body p-0">
<div class="table-responsive">
<table class="table  custom-table  no-footer">
<thead>
<tr>
<th>Employee</th>
<th>Leave Type </th>
<th>From	</th>
<th>To</th>
<th>reason</th>
<th>Status</th>
<th colspan =2 >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  Actions</th>
</tr>
</thead>
<tbody>


@foreach($leaves as $leave)
@if($leave->status == "pending")

<tr>
<td>
<div class="table-img">
<label> {{$leave->name}} </label>
</div>
</td>
<td>
<label>{{$leave-> leave_type}} </label>
</td>
<td>
<label>{{$leave-> l_from}} </label>
</td>
<td><label>{{$leave-> l_to}}	</label></td>
<td><label>{{$leave-> reason}}</label></td>
<td>
<label><a class="action_label3">{{$leave-> status}}</a></label>
</td>
<td>
<label><a class="action_label4" href="/approve/{{$leave-> id}}" onclick="return confirm('Are you sure You want to grant this leave?')" style ="color:green" >Approve</i> </a></label>
</td>
<td>
<label><a class="action_label4" href="/leave-delete/{{$leave-> id}}" onclick="return confirm('Are you sure You want to delete this leave?')">Delete <i data-feather="trash-2"></i> </a></label>
</td>
</tr>
@endif
@endforeach


 </tbody>
</table>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-xl-12 col-sm-12 col-12 ">
<div class="card ">
<div class="card-header">
<h2 class="card-titles">Approved Leaves</h2>
</div>
<div class="card-body p-0">
<div class="table-responsive">
<table class="table  custom-table  no-footer">
<thead>
<tr>
<th>Employee</th>
<th>Leave Type </th>
<th>From	</th>
<th>To</th>
<th>reason</th>
<th>Status</th>
<th>Action</th>
</tr>
</thead>
<tbody>

@foreach($leaves as $leave)

@if($leave->status =="approved")


<tr>
<td>
<div class="table-img">
<label>{{$leave->name}}  </label>
</div>
</td>
<td>
<label>{{$leave-> leave_type}} </label>
</td>
<td>
<label>{{$leave-> l_from}} </label>
</td>
<td><label>{{$leave-> l_to}}	</label></td>
<td><label>{{$leave-> reason}}</label></td>
<td>
<label><a class="action_label3">{{$leave-> status}}</a></label>
</td>
<td>
<label><a class="action_label4" href="/leave-delete/{{$leave-> id}}" onclick="return confirm('Are you sure You want to delete this leave?')">Delete <i data-feather="trash-2"></i> </a></label>
</td>
</tr>
@endif
@endforeach



 </tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

</div>






<div class="customize_popup">
<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="staticBackdropLabel">Edit Office</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<div class=" col-md-12 p-0">
<div class=" form-popup">
<label>Office Name</label>
<input type="text">
</div>
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-apply">Apply</button>
<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
</div>
</div>
</div>
</div>
</div>
<div class="customize_popup">
<div class="modal fade" id="editmember" tabindex="-1" aria-labelledby="staticBackdropLabels" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="staticBackdropLabels">Edit Member</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<div class=" col-md-12 p-0">
<div class=" form-popup">
<input type="text" placeholder="Member Name">
</div>
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-primary">Save</button>
<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
</div>
</div>
</div>
</div>
</div>
<div class="customize_popup">
<div class="modal fade" id="delete" tabindex="-1" aria-labelledby="staticBackdropLabels1" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="modal-header text-centers border-0">
<h5 class="modal-title text-center" id="staticBackdropLabels1">Are You Sure Want to Delete?</h5>
</div>
<div class="modal-footer text-centers">
<button type="button" class="btn btn-primary">Delete</button>
<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
</div>
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