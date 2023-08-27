<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/navbar.css">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">    <title>Login</title>

</head>
<body>
<navbar class="navbar__section">
		<header class="nav__header">
			<nav class="nav nav__container">
				<div class="nav__data">
					<a href="../index.php" class="nav__logo">
						BidWiz
					</a>

					<div class="nav__toggle" id="nav-toggle">
						<i class="ri-menu-line nav__toggle-menu"></i>
						<i class="ri-close-line nav__toggle-close"></i>
					</div>
				</div>
				<div class="nav__menu" id="nav-menu">
					<ul class="nav__list">
						<li class="dropdown__item">
							<div class="nav__link dropdown__button">
								Categories
							</div>
						</li>


						<li class="dropdown__item">
							<a href="faq.php" class="nav__link" style="text-decoration: none;">FAQ</a>
						</li>

						<li>
							<a href="aboutus.php" class="nav__link">About us</a>
						</li>


						<li class="dropdown__item">
							<a href="contact.php" class="nav__link">Contact us</a>
						</li>
						<li>
							<form class="d-flex" action="search_product.php" method="GET" style="display:flex; align-items:center; justify-content:center; padding: 0 16px 0 16px;">
								<div class="search-input-field">
									<input class="search-input" style="padding: 8px; border-color: rgb(0, 162, 255);" type="search" placeholder="Search" aria-label="Search" name="search_data"> <!-- Change the input name to "search_data_product" -->
								</div>
								<input type="submit" value="Search" class="search-submit" name="search_data_product">
							</form>



						<li class="dropdown__item">
							<?php
							require_once '../classes/person.php';

							if (isset($_SESSION["buyer"])) {
								$buyer = $_SESSION["buyer"];
								echo '<a href="buyer_profile.php" class="nav__link">' . $buyer->getFirstName() . '<i style="padding-left: 20px;" class="fa fa-user" aria-hidden="true"></i></a>';
							} elseif (isset($_SESSION["seller"])) {
								$seller = $_SESSION["seller"];
								echo '<a href="seller_profile.php" class="nav__link">' . $seller->getFirstName() . '<i style="padding-left: 20px;" class="fa fa-user" aria-hidden="true"></i></a>';
							} else {
								echo '<a href="prelogin.php" class="nav__link">Login/Signup<i style="padding-left: 20px;" class="fa fa-user" aria-hidden="true"></i></a>';
							}
							?>
						</li>






					</ul>

				</div>

			</nav>
		</header>

		<script src="../js/navbar.js"></script>
	</navbar> 	

	
   <div class="box">
    <div class="form__container">



        <div class="top">
            <header class="header_1">Admin Login</header>
        </div>

		<form action="index.php" method="post">

        <div class="input-field">
            <input type="text" class="input" placeholder="Email" id="" name="email">
            <i class='bx bx-user' ></i>
        </div>

        <div class="input-field">
            <input type="Password" class="input" placeholder="Password" id="" name="password">
            <i class='bx bx-lock-alt'></i>
        </div>

        <div class="input-field">
           <input type="submit" class="submit" value="Login" id="">
        </div>

		</form>

        <div class="two-col">
            <div class="one">
            <label><a href="../prelogin.php">Login Now! as a user</a></label>
            </div>
            <div class="two">
                <label><a href="../signup.php">Sign up Now! as a user</a></label>
            </div>
        </div>
    </div>
</div> 
<?php
  
  include('../footer.php');

  ?>
</body>
</html>