<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
		<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
		<!-- Javascript -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
		<script>var base_url = '<?= base_url() ?>';</script>
		<title>Hello, world!</title>
  </head>
  <body>
		<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="user-panel">
        <div class="float-left image">
          <img src="<?= base_url('assets/images/user-1.png') ?>" class="rounded-circle" alt="User Image" width="48">
        </div>
        <div class="float-left ml-2 info">
          <span>Good Morning,</span><br>
          <span><strong>Jenny Wilson</strong></span>
        </div>
      </div>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="list-unstyled topbar-nav float-right mb-0"> 
					<li class="dropdown">
						<a class="nav-link nav-icon text-secondary" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
							<i class="fas fa-shopping-cart"></i>
							<span class="badge badge-danger navbar-badge">1</span>
						</a>
					</li>
				</ul>
				<ul class="list-unstyled topbar-nav float-right mb-0"> 
					<li class="dropdown">
						<a class="nav-link nav-icon text-secondary" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
							<i class="far fa-comment-dots"></i>
							<span class="badge badge-danger navbar-badge">1</span>
						</a>
					</li>
				</ul>
				<ul class="list-unstyled topbar-nav float-right mb-0"> 
					<li class="dropdown">
						<a class="nav-link nav-icon text-secondary" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
							<i class="far fa-bell"></i>
							<span class="badge badge-danger navbar-badge">2</span>
						</a>
					</li>
				</ul>
			</div>
		</nav>
		<nav class="navbar-expand-lg navbar-light bg-light sticky-top" id="search-filter">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="form-group" id="button-categories">
							<div class="scroll-container">
							</div>
						</div>
						<div class="form-group has-search">
							<span class="fa fa-search form-control-feedback"></span>
							<input type="text" class="form-control" name="search" placeholder="Search Product">
						</div>
					</div>
				</div>
			</div>
		</nav>
		<div class="wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12" id="box-search-result">
						<div class="row mt-2" id="search-result" style=""></div>
					</div>
				</div>
			</div>
		</div>
		<nav class="navbar bg-white border-top border-grey navbar-expand fixed-bottom">
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
						<i class="fas fa-long-arrow-up"></i><i class="fas fa-long-arrow-down"></i><br><small>Withdraw</small>
					</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link text-secondary">
						<i class="fas fa-user"></i><br><small>Account</small>
					</a>
				</li>
			</ul>
		</nav>
  </body>
  <script src="<?= base_url('assets/js/app.js') ?>"></script>
</html>
