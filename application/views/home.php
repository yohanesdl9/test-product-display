<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Products</title>

		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
		<link rel="stylesheet" href="<?= base_url('assets/plugins/fontawesome-free/css/all.min.css') ?>">
		<link rel="stylesheet" href="<?= base_url('assets/dist/css/adminlte.css') ?>">
		<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
		<script>var base_url = '<?= base_url() ?>';</script>
	</head>
	<body class="hold-transition layout-top-nav mx-3">
		<div class="wrapper">
			<nav class="main-header navbar navbar-expand-md navbar-light navbar-white fixed-top">
				<div class="container">
					<div class="user-panel">
						<div class="float-left image">
							<img src="<?= base_url('assets/dist/img/photo_profile.png') ?>" class="mt-2" alt="User Image" style="width: 2.9rem;">
						</div>
						<div class="float-left ml-2 info">
							<span>Good Morning,</span><br>
							<span><strong>Jenny Wilson</strong></span>
						</div>
					</div>
					<ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
						<li class="nav-item dropdown">
							<a class="nav-link nav-icon text-secondary" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
								<i class="fas fa-shopping-cart"></i>
								<span class="badge badge-danger navbar-badge">1</span>
							</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link nav-icon text-secondary" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
								<i class="far fa-comment-dots"></i>
								<span class="badge badge-danger navbar-badge">1</span>
							</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link nav-icon text-secondary" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
								<i class="far fa-bell"></i>
								<span class="badge badge-danger navbar-badge">2</span>
							</a>
						</li>
					</ul>
				</div>
			</nav>
			<div class="navbar-expand-md navbar-light navbar-white sticky-top" id="search-filter">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="my-1" id="button-categories">
							</div>
							<div class="has-search my-1">
								<span class="fa fa-search form-control-feedback"></span>
								<input type="text" class="form-control" name="search" placeholder="Search Product">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="content">
				<div class="container">
					<div class="row">
						<div class="col-md-12 mt-2" id="box-search-result">
							<div class="row" id="search-result" style=""></div>
						</div>
					</div>
				</div>
			</div>
			<nav class="navbar bg-white border-top border-grey navbar-expand fixed-bottom">
				<div class="container">
					<ul class="navbar-nav nav-justified w-100">
						<li class="nav-item">
							<a href="#" class="nav-link text-secondary">
								<i class="fas fa-home"></i><br><small>Home</small>
							</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link text-secondary">
								<i class="fas fa-shopping-bag"></i><br><small>Order</small>
							</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link text-secondary">
								<i class="fas fa-long-arrow-alt-up"></i><i class="fas fa-long-arrow-alt-down"></i><br><small>Withdraw</small>
							</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link text-secondary">
								<i class="fas fa-user"></i><br><small>Account</small>
							</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>

		<script src="<?= base_url('assets/plugins/jquery/jquery.js') ?>"></script>
		<script src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.bundle.js') ?>"></script>
		<script src="<?= base_url('assets/dist/js/adminlte.js') ?>"></script>
		<script src="<?= base_url('assets/js/app.js') ?>"></script>

	</body>
</html>
