<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="./css/product-card.css" />
  <link rel="stylesheet" href="./css/navbar.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>BidWiz</title>
</head>

<body>

<navbar class="navbar__section">
		<header class="nav__header">
			<nav class="navN nav__container">
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
            <a href="category.php" class="nav__link" style="text-decoration: none;">Categories</a>
								
						</li>


						<li class="dropdown__item">
							<a href="faq.php" class="nav__link">FAQ</a>
						</li>

						<li>
							<a href="aboutus.php" class="nav__link">About us</a>
						</li>


						<li class="dropdown__item">
								<a href="contact.php" class="nav__link">Contact us</a>
						</li>
            <li>
							<form class="d-flex"  action="search_product.php" method="GET" style="display:flex; align-items:center; justify-content:center; padding: 0 16px 0 16px;">
							<div class="search-input-field">
								<input class="search-input" style="padding: 8px; border-color: rgb(0, 162, 255);" type="search" placeholder="Search" aria-label="Search" name="search_data"> <!-- Change the input name to "search_data_product" -->
								</div>
								<input type="submit" value="Search" class="search-submit" name="search_data_product">
							</form>
              <li class="dropdown__item">
							<?php
							require_once './classes/person.php';
              session_start();

				

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





						</li>


					</ul>

				</div>

			</nav>
		</header>

	
		<script src="../js/navbar.js"></script>
	</navbar>







    <div class="container mt-4">
     
      <h2>Electronics</h2>

      <div class="row">
        <?php
  
  include('./includes/connect.php');

      


     
        if ($con->connect_error) {
          die("Connection failed: " . $con->connect_error);
        }

        $sql = "SELECT * FROM item WHERE Category_id = 1";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
        ?>
            <div class="col-md-4 mb-4">
              <div class="product ">
              <img src="<?php echo $row['Item_image']; ?>" class="" alt="Item Image">
            <div class="card-body">
              <h5 class="card-title"><?php echo $row['Item_Title']; ?></h5>
              <p class="card-text"><?php echo $row['Description']; ?></p>
              <p class="card-text">Starting Bid: <?php echo $row['Starting_bid_price']; ?>LKR</p>
              <p class="card-text">End Price: <?php echo $row['End_price']; ?>LKR</p>
              <p class="card-text">End Date: <?php echo $row['End_date']; ?></p>
              <a href="./item_description.php?item_id=<?php echo $row['ItemNumber']; ?>" class="btn btn-primary">Bid Now</a>
            </div>
              </div>
            </div>
        <?php
          }
        } else {
          echo "No items found in Category 1.";
        }

        $con->close();
        ?>
      </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



    <!-- ********************************************************************* -->

 

   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        footer a.link-secondary {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <footer>
        <div class="container py-4 py-lg-5">
            <div class="row justify-content-center">
                <div class="col-sm-4 col-md-3 text-center text-lg-start d-flex flex-column item">
                    <h3 class="fs-6">Popular Categories</h3>
                    <ul class="list-unstyled">
                        <li><a class="link-secondary" href="#">Electronic</a></li>
                        <li><a class="link-secondary" href="#">Cloath</a></li>
                        <li><a class="link-secondary" href="#">Sport</a></li>
                    </ul>
                </div>
                <div class="col-sm-4 col-md-3 text-center text-lg-start d-flex flex-column item">
                    <h3 class="fs-6">Quick Links</h3>
                    <ul class="list-unstyled">
                        <li><a class="link-secondary" href="#">About us</a></li>
                        <li><a class="link-secondary" href="#">Contact</a></li>
                        <li><a class="link-secondary" href="#">FAQ</a></li>
                    </ul>
                </div>
                <div class="col-sm-4 col-md-3 text-center text-lg-start d-flex flex-column item">
                    <h3 class="fs-6">Contact</h3>
                    <ul class="list-unstyled">
                        <li><a class="link-secondary" href="#">info@mail.com</a></li>
                        <li><a class="link-secondary" href="#">0752245147</a></li>
                        <li><a class="link-secondary" href="#">Sri Lanka</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 text-center text-lg-start d-flex flex-column align-items-center order-first align-items-lg-start order-lg-last item social">
                    <div class="fw-bold d-flex align-items-center mb-2"></div>
                    <p class="text-muted">
                    Get your dream item from BidWiz!                    </p>
                </div>
            </div>
            <hr>
            <div class="d-flex justify-content-between align-items-center pt-3">
                <p class="text-muted mb-0">
                    &copy; 2023 BidWiz.com
                </p>
                <ul class="list-inline mb-0">
                  
                </ul>
            </div>
        </div>
    </footer>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

 