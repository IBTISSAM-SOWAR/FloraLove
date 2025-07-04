<?php
include '../db/init.php';
if (!isset($_SESSION["user"]) && !isset($_COOKIE["user"])) {
	header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Kanakku - Bootstrap Admin HTML Template</title>

	<!-- Favicon -->
	<link rel="shortcut icon" href="assets/img/favicon.png">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

	<!-- Main CSS -->
	<link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="nk-body bg-lighter npc-default has-sidebar no-touch nk-nio-theme">

	<!-- Main Wrapper -->
	<div class="main-wrapper">

		<!-- Header -->
		<div class="header header-one">

			<!-- Logo -->
			<div class="header-left header-left-one">
				<a href="index.html" class="logo">
					<img src="assets/img/logo.png" alt="Logo">
				</a>
				<a href="index.html" class="white-logo">
					<img src="assets/img/logo-white.png" alt="Logo">
				</a>
				<a href="index.html" class="logo logo-small ">
					<img src="assets/img/logo-small.png" alt="Logo" width="30" height="30">
				</a>
			</div>
			<!-- /Logo -->

			<!-- Sidebar Toggle -->
			<a href="javascript:void(0);" id="toggle_btn">
				<i class="fas fa-bars"></i>
			</a>
			<!-- /Sidebar Toggle -->

			<!-- Search -->
			<div class="top-nav-search">
				<form>
					<input type="text" class="form-control" placeholder="Search here">
					<button class="btn" type="submit"><i class="fas fa-search"></i></button>
				</form>
			</div>
			<!-- /Search -->

			<!-- Mobile Menu Toggle -->
			<a class="mobile_btn" id="mobile_btn">
				<i class="fas fa-bars"></i>
			</a>
			<!-- /Mobile Menu Toggle -->

			<!-- Header Menu -->
			<ul class="nav nav-tabs user-menu">
				<!-- Flag -->
				<li class="nav-item dropdown has-arrow flag-nav">
					<a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button">
						<img src="assets/img/flags/us.png" alt="" height="20"> <span>English</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<a href="javascript:void(0);" class="dropdown-item">
							<img src="assets/img/flags/us.png" alt="" height="16"> English
						</a>
						<a href="javascript:void(0);" class="dropdown-item">
							<img src="assets/img/flags/fr.png" alt="" height="16"> French
						</a>
						<a href="javascript:void(0);" class="dropdown-item">
							<img src="assets/img/flags/es.png" alt="" height="16"> Spanish
						</a>
						<a href="javascript:void(0);" class="dropdown-item">
							<img src="assets/img/flags/de.png" alt="" height="16"> German
						</a>
					</div>
				</li>
				<!-- /Flag -->

				<!-- Notifications -->
				<li class="nav-item dropdown">
					<a href="#" class="nav-link" data-bs-toggle="dropdown">
						<i data-feather="bell"></i> <span class="badge rounded-pill">5</span>
					</a>
					<div class="dropdown-menu notifications">
						<div class="topnav-dropdown-header">
							<span class="notification-title">Notifications</span>
							<a href="javascript:void(0)" class="clear-noti"> Clear All</a>
						</div>
						<div class="noti-content">
							<ul class="notification-list">
								<li class="notification-message">
									<a href="activities.html">
										<div class="media d-flex">
											<span class="avatar avatar-sm">
												<img class="avatar-img rounded-circle" alt=""
													src="assets/img/profiles/avatar-02.jpg">
											</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Brian Johnson</span>
													paid the invoice <span class="noti-title">#DF65485</span></p>
												<p class="noti-time"><span class="notification-time">4 mins ago</span>
												</p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="activities.html">
										<div class="media d-flex">
											<span class="avatar avatar-sm">
												<img class="avatar-img rounded-circle" alt=""
													src="assets/img/profiles/avatar-03.jpg">
											</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Marie Canales</span>
													has accepted your estimate <span
														class="noti-title">#GTR458789</span></p>
												<p class="noti-time"><span class="notification-time">6 mins ago</span>
												</p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="activities.html">
										<div class="media d-flex">
											<div class="avatar avatar-sm">
												<span class="avatar-title rounded-circle bg-primary-light"><i
														class="far fa-user"></i></span>
											</div>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">New user
														registered</span></p>
												<p class="noti-time"><span class="notification-time">8 mins ago</span>
												</p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="activities.html">
										<div class="media d-flex">
											<span class="avatar avatar-sm">
												<img class="avatar-img rounded-circle" alt=""
													src="assets/img/profiles/avatar-04.jpg">
											</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Barbara Moore</span>
													declined the invoice <span class="noti-title">#RDW026896</span></p>
												<p class="noti-time"><span class="notification-time">12 mins ago</span>
												</p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="activities.html">
										<div class="media d-flex">
											<div class="avatar avatar-sm">
												<span class="avatar-title rounded-circle bg-info-light"><i
														class="far fa-comment"></i></span>
											</div>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">You have received a new
														message</span></p>
												<p class="noti-time"><span class="notification-time">2 days ago</span>
												</p>
											</div>
										</div>
									</a>
								</li>
							</ul>
						</div>
						<div class="topnav-dropdown-footer">
							<a href="activities.html">View all Notifications</a>
						</div>
					</div>
				</li>
				<!-- /Notifications -->

				<!-- User Menu -->
				<li class="nav-item dropdown has-arrow main-drop">
					<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
						<span class="user-img">
							<img src="assets/img/profiles/avatar-01.jpg" alt="">
							<span class="status online"></span>
						</span>
						<span>Admin</span>
					</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="profile.html"><i data-feather="user" class="me-1"></i>
							Profile</a>
						<a class="dropdown-item" href="settings.html"><i data-feather="settings" class="me-1"></i>
							Settings</a>
						<a class="dropdown-item" href="login.html"><i data-feather="log-out" class="me-1"></i>
							Logout</a>
					</div>
				</li>
				<!-- /User Menu -->

			</ul>
			<!-- /Header Menu -->

		</div>
		<!-- /Header -->

		<!-- Sidebar -->
		<div class="sidebar" id="sidebar">
			<div class="sidebar-inner slimscroll">
				<div id="sidebar-menu" class="sidebar-menu">
					<ul>
						<li class="menu-title"><span>Main</span></li>
						<li class="active">
							<a href="index.html"><i data-feather="home"></i> <span>Dashboard</span></a>
						</li>
						<li>
							<a href="customers.html"><i data-feather="users"></i> <span>Customers</span></a>
						</li>
						<li>
							<a href="estimates.html"><i data-feather="file-text"></i> <span>Estimates</span></a>
						</li>
						<li class="submenu">
							<a href="#"><i data-feather="clipboard"></i> <span> Invoices</span> <span
									class="menu-arrow"></span></a>
							<ul>
								<li><a href="invoices.html">Invoices List</a></li>
								<li><a href="invoice-grid.html">Invoices Grid</a></li>
								<li><a href="invoice-grid-two.html">Invoices Grid 2</a></li>
								<li><a href="add-invoice.html">Add Invoices</a></li>
								<li><a href="edit-invoice.html">Edit Invoices</a></li>
								<li><a href="view-invoice.html">Invoices Details</a></li>
								<li><a href="view-invoice-two.html">Invoices Details 2</a></li>
								<li><a href="invoices-settings.html">Invoices Settings</a></li>
							</ul>
						</li>
						<li>
							<a href="invoice-items.html"><i data-feather="star"></i> <span>Items</span></a>
						</li>
						<li>
							<a href="payments.html"><i data-feather="credit-card"></i> <span>Payments</span></a>
						</li>
						<li>
							<a href="expenses.html"><i data-feather="package"></i> <span>Expenses</span></a>
						</li>
						<li class="submenu">
							<a href="#"><i data-feather="pie-chart"></i> <span> Reports</span> <span
									class="menu-arrow"></span></a>
							<ul>
								<li><a href="sales-report.html">Sales Report</a></li>
								<li><a href="expenses-report.html">Expenses Report</a></li>
								<li><a href="profit-loss-report.html">Profit & Loss Report</a></li>
								<li><a href="taxs-report.html">Taxs Report</a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="#"><i data-feather="grid"></i> <span> Blogs</span>
								<span class="menu-arrow"></span>
							</a>
							<ul>
								<li><a href="blog.html">All Blogs</a></li>
								<li><a href="add-blog.html">Add Blog</a></li>
								<li><a href="edit-blog.html">Edit Blog</a></li>
								<li><a href="blog-categories.html">Categories</a></li>
							</ul>
						</li>
						<li>
							<a href="settings.html"><i data-feather="settings"></i> <span>Settings</span></a>
						</li>
						<li class="submenu">
							<a href="#"><i data-feather="grid"></i> <span> Application</span> <span
									class="menu-arrow"></span></a>
							<ul>
								<li><a href="chat.html">Chat</a></li>
								<li><a href="calendar.html">Calendar</a></li>
								<li><a href="inbox.html">Email</a></li>
							</ul>
						</li>
						<li class="menu-title">
							<span>Pages</span>
						</li>
						<li>
							<a href="profile.html"><i data-feather="user-plus"></i> <span>Profile</span></a>
						</li>
						<li class="submenu">
							<a href="#"><i data-feather="lock"></i> <span> Authentication </span> <span
									class="menu-arrow"></span></a>
							<ul>
								<li><a href="login.html"> Login </a></li>
								<li><a href="register.html"> Register </a></li>
								<li><a href="forgot-password.html"> Forgot Password </a></li>
								<li><a href="lock-screen.html"> Lock Screen </a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="#"><i data-feather="alert-octagon"></i> <span> Error Pages </span> <span
									class="menu-arrow"></span></a>
							<ul>
								<li><a href="error-404.html">404 Error </a></li>
								<li><a href="error-500.html">500 Error </a></li>
							</ul>
						</li>
						<li>
							<a href="users.html"><i data-feather="user"></i> <span>Users</span></a>
						</li>
						<li>
							<a href="blank-page.html"><i data-feather="file"></i> <span>Blank Page</span></a>
						</li>
						<li>
							<a href="maps-vector.html"><i data-feather="map-pin"></i> <span>Vector Maps</span></a>
						</li>
						<li class="menu-title">
							<span>UI Interface</span>
						</li>
						<li class="submenu">
							<a href="#"><i class="fab fa-get-pocket"></i> <span>Base UI </span> <span
									class="menu-arrow"></span></a>
							<ul>
								<li><a href="alerts.html">Alerts</a></li>
								<li><a href="accordions.html">Accordions</a></li>
								<li><a href="avatar.html">Avatar</a></li>
								<li><a href="badges.html">Badges</a></li>
								<li><a href="buttons.html">Buttons</a></li>
								<li><a href="buttongroup.html">Button Group</a></li>
								<li><a href="breadcrumbs.html">Breadcrumb</a></li>
								<li><a href="cards.html">Cards</a></li>
								<li><a href="carousel.html">Carousel</a></li>
								<li><a href="dropdowns.html">Dropdowns</a></li>
								<li><a href="grid.html">Grid</a></li>
								<li><a href="images.html">Images</a></li>
								<li><a href="lightbox.html">Lightbox</a></li>
								<li><a href="media.html">Media</a></li>
								<li><a href="modal.html">Modals</a></li>
								<li><a href="offcanvas.html">Offcanvas</a></li>
								<li><a href="pagination.html">Pagination</a></li>
								<li><a href="popover.html">Popover</a></li>
								<li><a href="progress.html">Progress Bars</a></li>
								<li><a href="placeholders.html">Placeholders</a></li>
								<li><a href="rangeslider.html">Range Slider</a></li>
								<li><a href="spinners.html">Spinner</a></li>
								<li><a href="sweetalerts.html">Sweet Alerts</a></li>
								<li><a href="tab.html">Tabs</a></li>
								<li><a href="toastr.html">Toasts</a></li>
								<li><a href="tooltip.html">Tooltip</a></li>
								<li><a href="typography.html">Typography</a></li>
								<li><a href="video.html">Video</a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="#"><i data-feather="box"></i> <span>Elements </span> <span
									class="menu-arrow"></span></a>
							<ul>
								<li><a href="ribbon.html">Ribbon</a></li>
								<li><a href="clipboard.html">Clipboard</a></li>
								<li><a href="drag-drop.html">Drag & Drop</a></li>
								<li><a href="rating.html">Rating</a></li>
								<li><a href="text-editor.html">Text Editor</a></li>
								<li><a href="counter.html">Counter</a></li>
								<li><a href="scrollbar.html">Scrollbar</a></li>
								<li><a href="notification.html">Notification</a></li>
								<li><a href="stickynote.html">Sticky Note</a></li>
								<li><a href="timeline.html">Timeline</a></li>
								<li><a href="horizontal-timeline.html">Horizontal Timeline</a></li>
								<li><a href="form-wizard.html">Form Wizard</a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="#"><i data-feather="bar-chart-2"></i> <span> Charts </span> <span
									class="menu-arrow"></span></a>
							<ul>
								<li><a href="chart-apex.html">Apex Charts</a></li>
								<li><a href="chart-js.html">Chart Js</a></li>
								<li><a href="chart-morris.html">Morris Charts</a></li>
								<li><a href="chart-flot.html">Flot Charts</a></li>
								<li><a href="chart-peity.html">Peity Charts</a></li>
								<li><a href="chart-c3.html">C3 Charts</a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="#"><i data-feather="award"></i> <span> Icons </span> <span
									class="menu-arrow"></span></a>
							<ul>
								<li><a href="icon-fontawesome.html">Fontawesome Icons</a></li>
								<li><a href="icon-feather.html">Feather Icons</a></li>
								<li><a href="icon-ionic.html">Ionic Icons</a></li>
								<li><a href="icon-material.html">Material Icons</a></li>
								<li><a href="icon-pe7.html">Pe7 Icons</a></li>
								<li><a href="icon-simpleline.html">Simpleline Icons</a></li>
								<li><a href="icon-themify.html">Themify Icons</a></li>
								<li><a href="icon-weather.html">Weather Icons</a></li>
								<li><a href="icon-typicon.html">Typicon Icons</a></li>
								<li><a href="icon-flag.html">Flag Icons</a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="#"><i data-feather="columns"></i> <span> Forms </span> <span
									class="menu-arrow"></span></a>
							<ul>
								<li><a href="form-basic-inputs.html">Basic Inputs </a></li>
								<li><a href="form-input-groups.html">Input Groups </a></li>
								<li><a href="form-horizontal.html">Horizontal Form </a></li>
								<li><a href="form-vertical.html"> Vertical Form </a></li>
								<li><a href="form-mask.html">Form Mask </a></li>
								<li><a href="form-validation.html">Form Validation </a></li>
								<li><a href="form-select2.html">Form Select2 </a></li>
								<li><a href="form-fileupload.html">File Upload </a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="#"><i data-feather="layout"></i> <span> Tables </span> <span
									class="menu-arrow"></span></a>
							<ul>
								<li><a href="tables-basic.html">Basic Tables </a></li>
								<li><a href="data-tables.html">Data Table </a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- /Sidebar -->

		<!-- Page Wrapper -->
		<div class="page-wrapper">
			<div class="content container-fluid">

				<div class="row">
					<div class="col-xl-3 col-sm-6 col-12">
						<div class="card">
							<div class="card-body">
								<div class="dash-widget-header">
									<span class="dash-widget-icon bg-1">
										<i class="fas fa-dollar-sign"></i>
									</span>
									<div class="dash-count">
										<div class="dash-title">Amount Due</div>
										<div class="dash-counts">
											<p>1,642</p>
										</div>
									</div>
								</div>
								<div class="progress progress-sm mt-3">
									<div class="progress-bar bg-5" role="progressbar" style="width: 75%"
										aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<p class="text-muted mt-3 mb-0"><span class="text-danger me-1"><i
											class="fas fa-arrow-down me-1"></i>1.15%</span> since last week</p>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 col-12">
						<div class="card">
							<div class="card-body">
								<div class="dash-widget-header">
									<span class="dash-widget-icon bg-2">
										<i class="fas fa-users"></i>
									</span>
									<div class="dash-count">
										<div class="dash-title">Customers</div>
										<div class="dash-counts">
											<p>3,642</p>
										</div>
									</div>
								</div>
								<div class="progress progress-sm mt-3">
									<div class="progress-bar bg-6" role="progressbar" style="width: 65%"
										aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<p class="text-muted mt-3 mb-0"><span class="text-success me-1"><i
											class="fas fa-arrow-up me-1"></i>2.37%</span> since last week</p>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 col-12">
						<div class="card">
							<div class="card-body">
								<div class="dash-widget-header">
									<span class="dash-widget-icon bg-3">
										<i class="fas fa-file-alt"></i>
									</span>
									<div class="dash-count">
										<div class="dash-title">Invoices</div>
										<div class="dash-counts">
											<p>1,041</p>
										</div>
									</div>
								</div>
								<div class="progress progress-sm mt-3">
									<div class="progress-bar bg-7" role="progressbar" style="width: 85%"
										aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<p class="text-muted mt-3 mb-0"><span class="text-success me-1"><i
											class="fas fa-arrow-up me-1"></i>3.77%</span> since last week</p>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 col-12">
						<div class="card">
							<div class="card-body">
								<div class="dash-widget-header">
									<span class="dash-widget-icon bg-4">
										<i class="far fa-file"></i>
									</span>
									<div class="dash-count">
										<div class="dash-title">Estimates</div>
										<div class="dash-counts">
											<p>2,150</p>
										</div>
									</div>
								</div>
								<div class="progress progress-sm mt-3">
									<div class="progress-bar bg-8" role="progressbar" style="width: 45%"
										aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<p class="text-muted mt-3 mb-0"><span class="text-danger me-1"><i
											class="fas fa-arrow-down me-1"></i>8.68%</span> since last week</p>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-xl-7 d-flex">
						<div class="card flex-fill">
							<div class="card-header">
								<div class="d-flex justify-content-between align-items-center">
									<h5 class="card-title">Sales Analytics</h5>

									<div class="dropdown">
										<button class="btn btn-white btn-sm dropdown-toggle" type="button"
											id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
											Monthly
										</button>
										<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
											<li>
												<a href="javascript:void(0);" class="dropdown-item">Weekly</a>
											</li>
											<li>
												<a href="javascript:void(0);" class="dropdown-item">Monthly</a>
											</li>
											<li>
												<a href="javascript:void(0);" class="dropdown-item">Yearly</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="card-body">
								<div class="d-flex align-items-center justify-content-between flex-wrap flex-md-nowrap">
									<div class="w-md-100 d-flex align-items-center mb-3 flex-wrap flex-md-nowrap">
										<div>
											<span>Total Sales</span>
											<p class="h3 text-primary me-5">$1000</p>
										</div>
										<div>
											<span>Receipts</span>
											<p class="h3 text-success me-5">$1000</p>
										</div>
										<div>
											<span>Expenses</span>
											<p class="h3 text-danger me-5">$300</p>
										</div>
										<div>
											<span>Earnings</span>
											<p class="h3 text-dark me-5">$700</p>
										</div>
									</div>
								</div>

								<div id="sales_chart"></div>
							</div>
						</div>
					</div>
					<div class="col-xl-5 d-flex">
						<div class="card flex-fill">
							<div class="card-header">
								<div class="d-flex justify-content-between align-items-center">
									<h5 class="card-title">Invoice Analytics</h5>

									<div class="dropdown">
										<button class="btn btn-white btn-sm dropdown-toggle" type="button"
											id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
											Monthly
										</button>
										<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
											<li>
												<a href="javascript:void(0);" class="dropdown-item">Weekly</a>
											</li>
											<li>
												<a href="javascript:void(0);" class="dropdown-item">Monthly</a>
											</li>
											<li>
												<a href="javascript:void(0);" class="dropdown-item">Yearly</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="card-body">
								<div id="invoice_chart"></div>
								<div class="text-center text-muted">
									<div class="row">
										<div class="col-4">
											<div class="mt-4">
												<p class="mb-2 text-truncate"><i
														class="fas fa-circle text-primary me-1"></i> Invoiced</p>
												<h5>$2,132</h5>
											</div>
										</div>
										<div class="col-4">
											<div class="mt-4">
												<p class="mb-2 text-truncate"><i
														class="fas fa-circle text-success me-1"></i> Received</p>
												<h5>$1,763</h5>
											</div>
										</div>
										<div class="col-4">
											<div class="mt-4">
												<p class="mb-2 text-truncate"><i
														class="fas fa-circle text-danger me-1"></i> Pending</p>
												<h5>$973</h5>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="card">
							<div class="card-header">
								<div class="row">
									<div class="col">
										<h5 class="card-title">Recent Invoices</h5>
									</div>
									<div class="col-auto">
										<a href="invoices.html" class="btn-right btn btn-sm btn-outline-primary">
											View All
										</a>
									</div>
								</div>
							</div>
							<div class="card-body">
								<div class="mb-3">
									<div class="progress progress-md rounded-pill mb-3">
										<div class="progress-bar bg-success" role="progressbar" style="width: 47%"
											aria-valuenow="47" aria-valuemin="0" aria-valuemax="100"></div>
										<div class="progress-bar bg-warning" role="progressbar" style="width: 28%"
											aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
										<div class="progress-bar bg-danger" role="progressbar" style="width: 15%"
											aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
										<div class="progress-bar bg-info" role="progressbar" style="width: 10%"
											aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<div class="row">
										<div class="col-auto">
											<i class="fas fa-circle text-success me-1"></i> Paid
										</div>
										<div class="col-auto">
											<i class="fas fa-circle text-warning me-1"></i> Unpaid
										</div>
										<div class="col-auto">
											<i class="fas fa-circle text-danger me-1"></i> Overdue
										</div>
										<div class="col-auto">
											<i class="fas fa-circle text-info me-1"></i> Draft
										</div>
									</div>
								</div>

								<div class="table-responsive">

									<table class="table table-stripped table-hover">
										<thead class="thead-light">
											<tr>
												<th>Customer</th>
												<th>Amount</th>
												<th>Due Date</th>
												<th>Status</th>
												<th class="text-right">Action</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<h2 class="table-avatar">
														<a href="profile.html"><img
																class="avatar avatar-sm me-2 avatar-img rounded-circle"
																src="assets/img/profiles/avatar-04.jpg"
																alt="User Image">Barbara Moore</a>
													</h2>
												</td>
												<td>$118</td>
												<td>23 Nov 2020</td>
												<td><span class="badge bg-success-light">Paid</span></td>
												<td class="text-right">
													<div class="dropdown dropdown-action">
														<a href="#" class="action-icon dropdown-toggle"
															data-bs-toggle="dropdown" aria-expanded="false"><i
																class="fas fa-ellipsis-h"></i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="edit-invoice.html"><i
																	class="far fa-edit me-2"></i>Edit</a>
															<a class="dropdown-item" href="view-invoice.html"><i
																	class="far fa-eye me-2"></i>View</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="far fa-trash-alt me-2"></i>Delete</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="far fa-check-circle me-2"></i>Mark as
																sent</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="far fa-paper-plane me-2"></i>Send Invoice</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="far fa-copy me-2"></i>Clone Invoice</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<h2 class="table-avatar">
														<a href="profile.html"><img
																class="avatar avatar-sm me-2 avatar-img rounded-circle"
																src="assets/img/profiles/avatar-06.jpg"
																alt="User Image">Karlene Chaidez</a>
													</h2>
												</td>
												<td>$222</td>
												<td>18 Nov 2020</td>
												<td><span class="badge bg-info-light">Sent</span></td>
												<td class="text-right">
													<div class="dropdown dropdown-action">
														<a href="#" class="action-icon dropdown-toggle"
															data-bs-toggle="dropdown" aria-expanded="false"><i
																class="fas fa-ellipsis-h"></i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="edit-invoice.html"><i
																	class="far fa-edit me-2"></i>Edit</a>
															<a class="dropdown-item" href="view-invoice.html"><i
																	class="far fa-eye me-2"></i>View</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="far fa-trash-alt me-2"></i>Delete</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="far fa-check-circle me-2"></i>Mark as
																sent</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="far fa-paper-plane me-2"></i>Send Invoice</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="far fa-copy me-2"></i>Clone Invoice</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="alert alert-primary alert-dismissible fade show"
														role="alert">
														<strong>Holy guacamole!</strong> You should check in on some of
														those fields below.
														<button type="button" class="btn-close" data-bs-dismiss="alert"
															aria-label="Close"></button>
													</div>
													<h2 class="table-avatar">
														<a href="profile.html"><img
																class="avatar avatar-sm me-2 avatar-img rounded-circle"
																src="assets/img/profiles/avatar-08.jpg"
																alt="User Image">Russell Copeland</a>
													</h2>
												</td>
												<td>$347</td>
												<td>10 Nov 2020</td>
												<td><span class="badge bg-warning-light">Partially Paid</span></td>
												<td class="text-right">
													<div class="dropdown dropdown-action">
														<a href="#" class="action-icon dropdown-toggle"
															data-bs-toggle="dropdown" aria-expanded="false"><i
																class="fas fa-ellipsis-h"></i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="edit-invoice.html"><i
																	class="far fa-edit me-2"></i>Edit</a>
															<a class="dropdown-item" href="view-invoice.html"><i
																	class="far fa-eye me-2"></i>View</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="far fa-trash-alt me-2"></i>Delete</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="far fa-check-circle me-2"></i>Mark as
																sent</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="far fa-paper-plane me-2"></i>Send Invoice</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="far fa-copy me-2"></i>Clone Invoice</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<h2 class="table-avatar">
														<a href="profile.html"><img
																class="avatar avatar-sm me-2 avatar-img rounded-circle"
																src="assets/img/profiles/avatar-10.jpg"
																alt="User Image">Joseph Collins</a>
													</h2>
												</td>
												<td>$826</td>
												<td>25 Sep 2020</td>
												<td><span class="badge bg-danger-light">Overdue</span></td>
												<td class="text-right">
													<div class="dropdown dropdown-action">
														<a href="#" class="action-icon dropdown-toggle"
															data-bs-toggle="dropdown" aria-expanded="false"><i
																class="fas fa-ellipsis-h"></i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="edit-invoice.html"><i
																	class="far fa-edit me-2"></i>Edit</a>
															<a class="dropdown-item" href="view-invoice.html"><i
																	class="far fa-eye me-2"></i>View</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="far fa-trash-alt me-2"></i>Delete</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="far fa-check-circle me-2"></i>Mark as
																sent</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="far fa-paper-plane me-2"></i>Send Invoice</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="far fa-copy me-2"></i>Clone Invoice</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<h2 class="table-avatar">
														<a href="profile.html"><img
																class="avatar avatar-sm me-2 avatar-img rounded-circle"
																src="assets/img/profiles/avatar-11.jpg"
																alt="User Image">Jennifer Floyd</a>
													</h2>
												</td>
												<td>$519</td>
												<td>18 Sep 2020</td>
												<td><span class="badge bg-success-light">Paid</span></td>
												<td class="text-right">
													<div class="dropdown dropdown-action">
														<a href="#" class="action-icon dropdown-toggle"
															data-bs-toggle="dropdown" aria-expanded="false"><i
																class="fas fa-ellipsis-h"></i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="edit-invoice.html"><i
																	class="far fa-edit me-2"></i>Edit</a>
															<a class="dropdown-item" href="view-invoice.html"><i
																	class="far fa-eye me-2"></i>View</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="far fa-trash-alt me-2"></i>Delete</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="far fa-check-circle me-2"></i>Mark as
																sent</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="far fa-paper-plane me-2"></i>Send Invoice</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="far fa-copy me-2"></i>Clone Invoice</a>
														</div>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="card">
							<div class="card-header">
								<div class="row">
									<div class="col">
										<h5 class="card-title">Recent Estimates</h5>
									</div>
									<div class="col-auto">
										<a href="estimates.html" class="btn-right btn btn-sm btn-outline-primary">
											View All
										</a>
									</div>
								</div>
							</div>
							<div class="card-body">
								<div class="mb-3">
									<div class="progress progress-md rounded-pill mb-3">
										<div class="progress-bar bg-success" role="progressbar" style="width: 39%"
											aria-valuenow="39" aria-valuemin="0" aria-valuemax="100"></div>
										<div class="progress-bar bg-danger" role="progressbar" style="width: 35%"
											aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
										<div class="progress-bar bg-warning" role="progressbar" style="width: 26%"
											aria-valuenow="26" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<div class="row">
										<div class="col-auto">
											<i class="fas fa-circle text-success me-1"></i> Sent
										</div>
										<div class="col-auto">
											<i class="fas fa-circle text-warning me-1"></i> Draft
										</div>
										<div class="col-auto">
											<i class="fas fa-circle text-danger me-1"></i> Expired
										</div>
									</div>
								</div>
								<div class="table-responsive">
									<table class="table table-hover">
										<thead class="thead-light">
											<tr>
												<th>Customer</th>
												<th>Expiry Date</th>
												<th>Amount</th>
												<th>Status</th>
												<th class="text-right">Action</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<h2 class="table-avatar">
														<a href="profile.html"><img
																class="avatar avatar-sm me-2 avatar-img rounded-circle"
																src="assets/img/profiles/avatar-05.jpg"
																alt="User Image"> Greg Lynch</a>
													</h2>
												</td>
												<td>5 Nov 2020</td>
												<td>$175</td>
												<td><span class="badge bg-info-light">Sent</span></td>
												<td class="text-right">
													<div class="dropdown dropdown-action">
														<a href="#" class="action-icon dropdown-toggle"
															data-bs-toggle="dropdown" aria-expanded="false"><i
																class="fas fa-ellipsis-h"></i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="edit-invoice.html"><i
																	class="far fa-edit me-2"></i>Edit</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="far fa-trash-alt me-2"></i>Delete</a>
															<a class="dropdown-item" href="view-estimate.html"><i
																	class="far fa-eye me-2"></i>View</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="far fa-file-alt me-2"></i>Convert to
																Invoice</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="far fa-check-circle me-2"></i>Mark as
																sent</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="far fa-paper-plane me-2"></i>Send
																Estimate</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="far fa-check-circle me-2"></i>Mark as
																Accepted</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="far fa-times-circle me-2"></i>Mark as
																Rejected</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<h2 class="table-avatar">
														<a href="profile.html"><img
																class="avatar avatar-sm me-2 avatar-img rounded-circle"
																src="assets/img/profiles/avatar-06.jpg"
																alt="User Image"> Karlene Chaidez</a>
													</h2>
												</td>
												<td>28 Oct 2020</td>
												<td>$1500</td>
												<td><span class="badge bg-warning-light">Expired</span></td>
												<td class="text-right">
													<div class="dropdown dropdown-action">
														<a href="#" class="action-icon dropdown-toggle"
															data-bs-toggle="dropdown" aria-expanded="false"><i
																class="fas fa-ellipsis-h"></i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="edit-invoice.html"><i
																	class="far fa-edit me-2"></i>Edit</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="far fa-trash-alt me-2"></i>Delete</a>
															<a class="dropdown-item" href="view-estimate.html"><i
																	class="far fa-eye me-2"></i>View</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="far fa-file-alt me-2"></i>Convert to
																Invoice</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="far fa-check-circle me-2"></i>Mark as
																sent</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="far fa-paper-plane me-2"></i>Send
																Estimate</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="far fa-check-circle me-2"></i>Mark as
																Accepted</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="far fa-times-circle me-2"></i>Mark as
																Rejected</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<h2 class="table-avatar">
														<a href="profile.html"><img
																class="avatar avatar-sm me-2 avatar-img rounded-circle"
																src="assets/img/profiles/avatar-07.jpg"
																alt="User Image"> John Blair</a>
													</h2>
												</td>
												<td>17 Oct 2020</td>
												<td>$2350</td>
												<td><span class="badge bg-success-light">Accepted</span></td>
												<td class="text-right">
													<div class="dropdown dropdown-action">
														<a href="#" class="action-icon dropdown-toggle"
															data-bs-toggle="dropdown" aria-expanded="false"><i
																class="fas fa-ellipsis-h"></i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="edit-invoice.html"><i
																	class="far fa-edit me-2"></i>Edit</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="far fa-trash-alt me-2"></i>Delete</a>
															<a class="dropdown-item" href="view-estimate.html"><i
																	class="far fa-eye me-2"></i>View</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="far fa-file-alt me-2"></i>Convert to
																Invoice</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="far fa-check-circle me-2"></i>Mark as
																sent</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="far fa-paper-plane me-2"></i>Send
																Estimate</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="far fa-check-circle me-2"></i>Mark as
																Accepted</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="far fa-times-circle me-2"></i>Mark as
																Rejected</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<h2 class="table-avatar">
														<a href="profile.html"><img
																class="avatar avatar-sm me-2 avatar-img rounded-circle"
																src="assets/img/profiles/avatar-08.jpg"
																alt="User Image"> Russell Copeland</a>
													</h2>
												</td>
												<td>8 Oct 2020</td>
												<td>$1890</td>
												<td><span class="badge bg-success-light">Accepted</span></td>
												<td class="text-right">
													<div class="dropdown dropdown-action">
														<a href="#" class="action-icon dropdown-toggle"
															data-bs-toggle="dropdown" aria-expanded="false"><i
																class="fas fa-ellipsis-h"></i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="edit-invoice.html"><i
																	class="far fa-edit me-2"></i>Edit</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="far fa-trash-alt me-2"></i>Delete</a>
															<a class="dropdown-item" href="view-estimate.html"><i
																	class="far fa-eye me-2"></i>View</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="far fa-file-alt me-2"></i>Convert to
																Invoice</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="far fa-check-circle me-2"></i>Mark as
																sent</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="far fa-paper-plane me-2"></i>Send
																Estimate</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="far fa-check-circle me-2"></i>Mark as
																Accepted</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="far fa-times-circle me-2"></i>Mark as
																Rejected</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<h2 class="table-avatar">
														<a href="profile.html"><img
																class="avatar avatar-sm me-2 avatar-img rounded-circle"
																src="assets/img/profiles/avatar-09.jpg"
																alt="User Image"> Leatha Bailey</a>
													</h2>
												</td>
												<td>30 Sep 2020</td>
												<td>$785</td>
												<td><span class="badge bg-success-light">Accepted</span></td>
												<td class="text-right">
													<div class="dropdown dropdown-action">
														<a href="#" class="action-icon dropdown-toggle"
															data-bs-toggle="dropdown" aria-expanded="false"><i
																class="fas fa-ellipsis-h"></i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="edit-invoice.html"><i
																	class="far fa-edit me-2"></i>Edit</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="far fa-trash-alt me-2"></i>Delete</a>
															<a class="dropdown-item" href="view-estimate.html"><i
																	class="far fa-eye me-2"></i>View</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="far fa-file-alt me-2"></i>Convert to
																Invoice</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="far fa-check-circle me-2"></i>Mark as
																sent</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="far fa-paper-plane me-2"></i>Send
																Estimate</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="far fa-check-circle me-2"></i>Mark as
																Accepted</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="far fa-times-circle me-2"></i>Mark as
																Rejected</a>
														</div>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Page Wrapper -->

	</div>
	<!-- /Main Wrapper -->



	<!-- jQuery -->
	<script src="assets/js/jquery-3.6.0.min.js"></script>

	<!-- Bootstrap Core JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>

	<!-- Feather Icon JS -->
	<script src="assets/js/feather.min.js"></script>

	<!-- Slimscroll JS -->
	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

	<!-- Chart JS -->
	<script src="assets/plugins/apexchart/apexcharts.min.js"></script>
	<script src="assets/plugins/apexchart/chart-data.js"></script>

	<!-- Custom JS -->
	<script src="assets/js/script.js"></script>


</body>

</html>