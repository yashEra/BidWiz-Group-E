<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="../css/product-card.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .product {
            width: 280px;
            height: 300px;

        }
    </style>
</head>

<body >
    <nav class="navbar navbar-expand-md bg-info navbar-dark">
        <a class="navbar-brand" href="index.php">Admin Panel</a>
        <a class="navbar-brand" href="../../index.php">Go to BidWiz Home</a>
    </nav>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                <div class="product">
                    <div class="card-body">
                        <h5 class="card-title">Manage Sellers</h5>
                        <p class="card-text">View and edit seller information.</p>
                        <a href="seller_management.php" class="btn btn-primary">Go to Sellers</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product">
                    <div class="card-body">
                        <h5 class="card-title">Manage Buyers</h5>
                        <p class="card-text">View and edit buyer information.</p>
                        <a href="buyer__manage.php" class="btn btn-primary">Go to Buyers</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product">
                    <div class="card-body">
                        <h5 class="card-title">Manage Categories</h5>
                        <p class="card-text">View and edit category information.</p>
                        <a href="category_management.php" class="btn btn-primary">Go to Categories</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>