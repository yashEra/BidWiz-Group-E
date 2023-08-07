<?php
include('../includes/connect.php');
include('functions/common_function.php');
// Call the search_product function
search_product();

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../css/categories.css">
	<link href="../css/navbar.css" rel="stylesheet">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
</style>

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
												<a href="./categories.html" class="dropdown__link">women</a>
											</li>
											<li>
												<a href="./html/categories.html" class="dropdown__link">Wrist watchers</a>
											</li>
										</ul>
									</div>
	
									<div class="dropdown__group">
	
	
										<span class="dropdown__title">Sport Items</span>
	
										<ul class="dropdown__list">
											b 
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
								<a href="contact.html" class="nav__link">Contact us</a>
							</div>
                         </li>
						<li class="dropdown__item">
							  <a href="Login.html" class="nav__link">Login/Signup<i style="padding-left: 20px;" class="fa fa-user" aria-hidden="true"></i></a>
							  
	  
						  </li>
						  <li>
						<form class=" d-flex" style=" margin-top: 30px;" action="search_product.php" method="GET">
                                   <input class="form-control me-5" style="padding: 8px;border-color: rgb(0, 162, 255); " type="search" placeholder="Search" aria-label="Search" name="search_data">
                                   <input type="submit" value="Search" class=" btn-outline-light "style="background-color: rgb(0, 162, 255);color: white;border: none;border-radius: 4px;cursor: pointer;padding: 8px 16px;" name="search_data_product">
                        </form>
							
						</li>
						 
                            
	                    
					</ul>
					
				</div>
				
			</nav>
		</header>
		
		<!--=============== MAIN JS ===============-->
		<script src="../js/navbar.js"></script>
	</navbar>
	

	
		
		<div class="contant">
			<!-- <div class="header">
				<p>CATEGORIES</p>
			</div> -->
			<div id="root"></div>
		</div>
	
	<script src="../js/categories.js"></script>
	
</body>
</html>
