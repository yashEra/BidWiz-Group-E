<!DOCTYPE html>
<html lang="en">

<?php
require_once './classes/person.php';
session_start();
if (isset($_SESSION["seller"])) {
	$seller = $_SESSION["seller"];
} else {
	header("Location: ./slogin.php?error=2");
	exit();
}

?>


<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

	<link rel="stylesheet" href="./css/navbar.css">
	<link rel="stylesheet" href="./css/profile.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Open+Sans">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

	<style>
		.container1 {
			margin: auto;
			background: linear-gradient(to bottom right, #00c6ff, #0072ff);
			padding: 50px;
			border-radius: 10px;
			box-shadow: 20px 20px 20px rgba(0, 0, 0, 0.2);
			width: 1000px;
			height: 570px;
		}
	</style>
	<title>BidWiz</title>

</head>

<body>

	<?php

	include('navbar.php');

	?>


	<br><br><br><br><br>


	<div class="container1">
		<h1>Welcome <?php echo $seller->getFirstName() . " " . $seller->getLastName(); ?> !!!</h1><br>
		<div class="main-body">
			<div class="row">
				<div class="col-lg-4">
					<div class="card">
						<div class="card-body">
							<div class="d-flex flex-column align-items-center text-center">
								<img src="<?php echo $seller->getpic(); ?>" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
								<div class="mt-3">
									<h4><?php echo $seller->getFirstName() . " " . $seller->getLastName(); ?> </h4>
									<h6>(Seller)</h6><br>
									<a href="./classes/slogout.php"><button class="btn btn-outline-primary">Log Out</button></a>
									<br><br>
									<form action="./classes/Sstoreprocess.php" method="post">
												<input type="hidden" class="btn btn-primary px-4" name="id" value="<?php echo $seller->getSellerId(); ?>">
												<button class="btn btn-outline-primary"> View History</button>
									</form>
									<br><form action="addItem.php" method="post">
												<input type="hidden" class="btn btn-primary px-4" name="id" value="<?php echo $seller->getSellerId(); ?>">
												<button class="btn btn-outline-primary"> Add Item</button>
									</form>

								</div>
							</div>

						</div>
					</div>
				</div>

				<div class="col-lg-8">
					<div class="card-body">
						<br>
						<div class="row mb-3">
							<div class="col-sm-3">
								<h6 class="mb-0">Full Name</h6>
							</div>
							<div class="col-sm-9 text-dark">
								<?php echo $seller->getFirstName() . " " . $seller->getLastName(); ?>
							</div>
						</div>
						<div class="row mb-3">
							<div class="col-sm-3">
								<h6 class="mb-0">Email</h6>
							</div>
							<div class="col-sm-9 text-dark">
								<?php echo $seller->getEmail(); ?>
							</div>
						</div>
						<div class="row mb-3">
							<div class="col-sm-3">
								<h6 class="mb-0">Phone Number</h6>
							</div>
							<div class="col-sm-9 text-dark">
								<?php echo $seller->getphoneno(); ?>
							</div>
						</div>
						<div class="row mb-3">
							<div class="col-sm-3">
								<h6 class="mb-0">Address</h6>
							</div>
							<div class="col-sm-9 text-dark">
								<?php echo $seller->getaddress(); ?>
							</div>
						</div>


					</div>
					<!--  -->
					<div class="row">
						<div class="col-sm-5"></div>
						<div class="col-sm-9 text-secondary">
							<a href="./editsUser.php"><input type="button" class="btn btn-primary px-4" value="Edit Profile"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	</div>
	<?php

	include('footer.php');

	?>

</body>