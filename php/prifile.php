<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/profile.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Open+Sans">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <title>BidWiz</title>

</head>

<body>
	 
    <navbar class="navbar__section">
		<!--=============== HEADER ===============-->
		<header class="nav__header">
			<nav class="nav nav__container">
				<div class="nav__data">
					<a href="../index.html" class="nav__logo">
						 BidWiz
					</a>
	
					<div class="nav__toggle" id="nav-toggle">
						<i class="ri-menu-line nav__toggle-menu"></i>
						<i class="ri-close-line nav__toggle-close"></i>
					</div>
				</div>
  
				<!--=============== NAV MENU ===============-->
				<div class="nav__menu" id="nav-menu">
					<ul class="nav__list">
						<li>
							<a href="../index.html" class="nav__link">Home</a>
						</li>
  
						<!--=============== DROPDOWN 1 ===============-->
						<li class="dropdown__item">                      
							<div class="nav__link dropdown__button">
								Categories <i class="ri-arrow-down-s-line dropdown__arrow"></i>
							</div>
  
							<div class="dropdown__container">
								<div class="dropdown__content">
									<div class="dropdown__group">
  
	
										<span class="dropdown__title">Electronic Items</span>
	
										<ul class="dropdown__list">
											<li>
												<a href="./html/categories.html" class="dropdown__link">Mobile $ Accesories</a>
											</li>
											<li>
												<a href="./html/categories.html" class="dropdown__link">Homeware</a>
											</li>
											<li>
												<a href="./html/categories.html" class="dropdown__link">Other</a>
											</li>
										</ul>
									</div>
	
									<div class="dropdown__group">
  
	
										<span class="dropdown__title">Cloath</span>
	
										<ul class="dropdown__list">
											<li>
												<a href="./html/categories.html" class="dropdown__link">men</a>
											</li>
											<li>
												<a href="./html/categories.html" class="dropdown__link">women</a>
											</li>
											<li>
												<a href="./html/categories.html" class="dropdown__link">Wrist watchers</a>
											</li>
										</ul>
									</div>
	
									<div class="dropdown__group">
  
	
										<span class="dropdown__title">Sport Items</span>
	
										<ul class="dropdown__list">
											<li>
												<a href="./html/categories.html" class="dropdown__link">Cloaths</a>
											</li>
											<li>
												<a href="./html/categories.html" class="dropdown__link">Bat</a>
											</li>
											<li>
												<a href="./html/categories.html" class="dropdown__link">ball</a>
											</li>
											<li>
												<a href="./html/categories.html" class="dropdown__link">other</a>
											</li>
										</ul>
									</div>
	
									<div class="dropdown__group">
  
	
										<span class="dropdown__title">other</span>
	
										<ul class="dropdown__list">
											<li>
												<a href="./html/categories.html" class="dropdown__link">new</a>
											</li>
											<li>
												<a href="./html/categories.html" class="dropdown__link">new</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</li>
  
  
						<li class="dropdown__item">
							  <a href="Faq.html" class="nav__link">FAQ</a>
						</li>
  
						<li>
							<a href="About_us.html" class="nav__link">About us</a>
						</li>
  
  
						<li class="dropdown__item">                        
							<div class="nav__link dropdown__button">
								Contact us
							</div>
  
							<li class="dropdown__item">
							  <a href="Login.html" class="nav__link">Login/Signup<i style="padding-left: 20px;" class="fa fa-user" aria-hidden="true"></i></a>
							  
	  
						  </li>
						</li>
					</ul>
				</div>
			</nav>
		</header>
		
		<!--=============== MAIN JS ===============-->
		<script src="../js/navbar.js"></script>
	</navbar>

<div class="container">
		<div class="main-body">
			<div class="row">
				<div class="col-lg-4">
					<div class="card">
						<div class="card-body">
							<div class="d-flex flex-column align-items-center text-center">
								<img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
								<div class="mt-3">
									<h4>Kamal Perera</h4>
									<p class="text-secondary mb-1">Seller and Byer</p>
									<p class="text-muted font-size-sm">Main road, Colombo 7</p>
									<button class="btn btn-primary">Follow</button>
									<button class="btn btn-outline-primary">Message</button>
								</div>
							</div>
							<hr class="my-4">
							<ul class="list-group list-group-flush">
								<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
									<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe me-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>
									<span class="text-secondary">user123.com</span>
								</li>
								<!-- <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
									<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github me-2 icon-inline"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>Github</h6>
									<span class="text-secondary">bootdey</span>
								</li> -->
								<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
									<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter me-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6>
									<span class="text-secondary">@user</span>
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
									<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram me-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
									<span class="text-secondary">user</span>
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
									<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook me-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
									<span class="text-secondary">user</span>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="card">
						<div class="card-body">
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Full Name</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" value="Kamal Perera">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Email</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" value="kamal@gmail.com">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Phone</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" value="011 2248847">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Mobile</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" value="076 2245147">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Address</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" value="Main road, Colombo 7">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-3"></div>
								<div class="col-sm-9 text-secondary">
									<input type="button" class="btn btn-primary px-4" value="Edit profile">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">
									<h5 class="d-flex align-items-center mb-3">Activities and Purcheses</h5>
									<p>Sellings</p>
									<div class="progress mb-3" style="height: 5px">
										<div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<p>Buyings</p>
									<div class="progress mb-3" style="height: 5px">
										<div class="progress-bar bg-danger" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
<iframe frameborder="0" scrolling="no" style="height:400px;width:100%;border:none;" src='./footer.html'></iframe>

	
</body>1111111