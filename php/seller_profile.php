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
    <title>BidWiz</title>

</head>

<body>
	 
<?php
  
  include('navbar.php');

  ?>

<div class="container">
		<div class="main-body">
			<div class="row">
				<div class="col-lg-4">
					<div class="card">
						<div class="card-body">
							<div class="d-flex flex-column align-items-center text-center">
								<img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
								<div class="mt-3">
									<h4><?php echo $seller->getFirstName(). " " . $seller->getLastName();?> </h4>
									<h6>(Seller)</h6>
									<a href="./classes/slogout.php"><button class="btn btn-outline-primary">Log Out</button></a>
									<button class="btn btn-outline-primary">Change Password</button>
								</div>
							</div>
							<hr class="my-4">
							<ul class="list-group list-group-flush">
								<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
									<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe me-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>
									<span class="text-secondary">user123.com</span>
								</li>
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
						<div class="card-body">
						<br>
							<div class="row mb-3">
								<div class="col-sm-3">
								<h6 class="mb-0">Full Name</h6>
								</div>
								<div class="col-sm-9 text-secondary">
								<?php echo $seller->getFirstName() . " " . $seller->getLastName(); ?>
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Email</h6>
								</div>
								<div class="col-sm-9 text-secondary">
								<?php echo $seller->getEmail(); ?>
								</div>
							</div>

							
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Phone</h6>
								</div>
								<div class="col-sm-9 text-secondary">
								<?php echo $seller->getPhoneNo(); ?>
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Address</h6>
								</div>
								<div class="col-sm-9 text-secondary">
								<?php echo $seller->getAddress(); ?>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-5"></div>
								<div class="col-sm-9 text-secondary">
									<a href="./editsUser.php"><input type="button" class="btn btn-primary px-4" value="Edit Profile"></a>
								</div>
							</div>
							<br>
							<h6>Do you Want see your Item Buyer History?</h6>
							<br>
							<form  action="./classes/Sstoreprocess.php" method="post" >
							<div class="row">
								<div class="col-sm-5"></div>
								<div class="col-sm-9 text-secondary">
								<input type="hidden" class="btn btn-primary px-4" name="id" value="<?php echo $seller->getSellerId();?>">
								<button class="btn btn-primary px-4"> View History</button>
								</div>
							</div>
							</form>
						</div>
					</div>
			</div>
		</div>
	</div>
	</div>

	<br><br><br>
<iframe frameborder="0" scrolling="no" style="height:400px;width:100%;border:none;" src='../html/footer.html'></iframe>

	
</body>