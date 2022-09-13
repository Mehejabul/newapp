<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Bootstrap 5 Admin &amp; Dashboard Template">
	<meta name="author" content="Bootlab">
	<title>Default Dashboard | AppStack - Admin &amp; Dashboard Template</title>
	<link rel="canonical" href="dashboard-default.html" />
	<link rel="shortcut icon" href="{{asset('contents/admin')}}/img/favicon.ico">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&amp;display=swap" rel="stylesheet">
	<!-- Choose your prefered color scheme -->
	<!-- <link href="{{asset('contents/admin')}}/css/light.css" rel="stylesheet"> -->
	<!-- <link href="{{asset('contents/admin')}}/css/dark.css" rel="stylesheet"> -->
	<!-- BEGIN SETTINGS -->
	<!-- Remove this after purchasing -->
	<link class="js-stylesheet" href="{{asset('contents/admin')}}/css/light.css" rel="stylesheet">
	<script src="{{ asset('contents/admin') }}{{asset('contents/admin')}}/js/settings.js"></script>
	<!-- END SETTINGS -->
</head>
<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-behavior="sticky">
	<div class="wrapper">
		<nav id="sidebar" class="sidebar sidebar-light">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.html"> <span class="align-middle me-3">AppStack</span> </a>
				<ul class="sidebar-nav">
					<li class="sidebar-item active">
						<a href="{{ route('admin.index') }}" class="sidebar-link"> <i class="align-middle" data-feather="home"></i> <span class="align-middle">Dashboards</span> </a>
					</li>
                    <li class="sidebar-item">
                        <a data-bs-target="#pages" data-bs-toggle="collapse" class="sidebar-link collapsed">
                          <i class="align-middle" data-feather="user"> </i>
                          <span class="align-middle">Users</span>
                        </a>
						<ul id="pages" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="{{ route('user.index') }}">All user</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="{{ route('user.create') }}">Create user</a></li>
						</ul>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="tables-bootstrap.html"> <i class="align-middle" data-feather="list"></i> <span class="align-middle">Tables</span> </a>
					</li>
				</ul>
			</div>
		</nav>
		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle"> <i class="hamburger align-self-center"></i> </a>
				<form class="d-none d-sm-inline-block">
					<div class="input-group input-group-navbar">
						<input type="text" class="form-control" placeholder="Search projects…" aria-label="Search">
						<button class="btn" type="button"> <i class="align-middle" data-feather="search"></i> </button>
					</div>
				</form>
				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown" data-bs-toggle="dropdown">
								<div class="position-relative"> <i class="align-middle" data-feather="message-circle"></i>  </div>
							</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
								<div class="position-relative"> <i class="align-middle" data-feather="bell"></i> </div>
							</a>

						</li>
						<li class="nav-item dropdown">
							<a class="nav-flag dropdown-toggle" href="#" id="languageDropdown" data-bs-toggle="dropdown"> <img src="{{asset('contents/admin')}}/img/flags/us.png" alt="English" /> </a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown"> <i class="align-middle" data-feather="settings"></i> </a>
							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown"> <img src="{{asset('contents/admin')}}/img/avatars/avatar.jpg" class="avatar img-fluid rounded-circle me-1" alt="Chris Wood" /> <span class="text-dark">Chris Wood</span> </a>
							<div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="align-middle me-1" data-feather="user"></i>Sign out</a>
                            </div>
						</li>
					</ul>
				</div>
			</nav>
			<main class="content">
				<div class="container-fluid p-0">
					<div class="row mb-2 mb-xl-3">
						<div class="col-auto d-none d-sm-block">
							<h3>Dashboard</h3> </div>
						<div class="col-auto ms-auto text-end mt-n1">
							<div class="dropdown me-2 d-inline-block">
								<a class="btn btn-light bg-white shadow-sm dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-display="static"> <i class="align-middle mt-n1" data-feather="calendar"></i> Today </a>
								<div class="dropdown-menu dropdown-menu-end">
									<h6 class="dropdown-header">Settings</h6> <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
									<div class="dropdown-divider"></div> <a class="dropdown-item" href="#">Separated link</a> </div>
							</div>
							<button class="btn btn-primary shadow-sm"> <i class="align-middle" data-feather="filter">&nbsp;</i> </button>
							<button class="btn btn-primary shadow-sm"> <i class="align-middle" data-feather="refresh-cw">&nbsp;</i> </button>
						</div>
					</div>
                     @yield('content')
                    </div>
			</main>
			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-start">
							<ul class="list-inline">
								<li class="list-inline-item"> <a class="text-muted" href="#">Support</a> </li>
								<li class="list-inline-item"> <a class="text-muted" href="#">Help Center</a> </li>
								<li class="list-inline-item"> <a class="text-muted" href="#">Privacy</a> </li>
								<li class="list-inline-item"> <a class="text-muted" href="#">Terms of Service</a> </li>
							</ul>
						</div>
						<div class="col-6 text-end">
							<p class="mb-0"> &copy; 2022 - <a href="index.html" class="text-muted">AppStack</a> </p>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>
	<script src="{{asset('contents/admin')}}/js/app.js"></script>
	<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> {{ csrf_field() }} </form>
</body>
<!-- Mirrored from appstack.bootlab.io/dashboard-default.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Aug 2022 09:26:22 GMT -->

</html>
