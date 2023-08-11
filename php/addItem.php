<?php
require_once './classes/person.php';
session_start();
if (isset($_SESSION["seller"])) {
  // User is logged in, retrieve the user object
  $seller = $_SESSION["seller"];
} else {
  // Redirect the user to login.php if not logged in
  header("Location: ./seller_profile.php?error=2");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Item - Bidwiz</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
</head>


<body>
<?php
  
  include('navbar.php');

  ?>
    <div class="container mt-5" style="padding-top: 60px;">
        <h2>Add Item</h2>
        <form action="./classes/addItemProcess.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="item_title" class="form-label">Item Title:</label>
                        <input type="text" class="form-control" id="item_title" name="item_title" required>
                    </div>
                    <div class="mb-3">
                        <label for="category_id" class="form-label">Category ID:</label>
                        <input type="number" class="form-control" id="category_id" name="category_id" required>
                    </div>
                    <div class="mb-3">
                        <label for="starting_bid" class="form-label">Starting Bid Price:</label>
                        <input type="text" class="form-control" id="starting_bid" name="starting_bid" required>
                    </div>
                    <div class="mb-3">
                        <label for="item_title" class="form-label">End bid Price:</label>
                        <input type="text" class="form-control" id="end_bid" name="end_bid" required>
                    </div>
                    <div class="mb-3">
                        <label for="start_date" class="form-label">Start Date:</label>
                        <input type="date" class="form-control" id="start_date" name="start_date" required>
                    </div>
                    <div class="mb-3">
                        <label for="end_date" class="form-label">End Date:</label>
                        <input type="date" class="form-control" id="end_date" name="end_date" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="description" class="form-label">Description:</label>
                        <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="item_image" class="form-label">Item Image:</label>
                        <input type="file" class="form-control" id="item_image" name="item_image" accept="image/*" required>
                    </div>

                    <div class="mb-3">
                        <label for="item_keywords" class="form-label">Item Keywords:</label>
                        <input type="text" class="form-control" id="item_keywords" name="item_keywords" required>
                    </div>

                </div>
            </div>
            <!--  -->
            <!-- <button type="submit" class="btn btn-primary">Add Item</button> -->
            <div class="col-sm-9 text-secondary">
                <input type="hidden" class="btn btn-primary px-4" name="id" value="<?php echo $seller->getSellerId(); ?>">
                <button class="btn btn-primary px-4"> Add Item</button>
                <?php //echo "<h2>$seller->getSellerId()</h2>"; ?>
            </div>
            <!--  -->
        </form>
    </div>

    <!-- Include Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <?php
  
  include('footer.php');

  ?>
</body>

</html>