<!DOCTYPE html>
<html>
<head>
  <title>Item Description</title>
  <!-- Include Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">
  <?php
  // Replace with your database connection details
  $servername = "localhost";
  $username = "testuser";
  $password = "testuser";
  $dbname = "bidwiz";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Get item ID from query parameter
  if (isset($_GET['item_id']) && is_numeric($_GET['item_id'])) {
    $item_id = $_GET['item_id'];

    // Select item details and current bid value from the database
    $item_sql = "SELECT * FROM item WHERE ItemNumber = $item_id";
    $item_result = $conn->query($item_sql);

    $bid_sql = "SELECT MAX(Bid_Price) AS CurrentBid FROM bid WHERE ItemNumber = $item_id";
    $bid_result = $conn->query($bid_sql);
    $current_bid = $bid_result->fetch_assoc()['CurrentBid'];

    if ($item_result->num_rows > 0) {
      $row = $item_result->fetch_assoc();
      ?>
      <div class="row">
        <div class="col-md-8">
          <img src="<?php echo $row['Item_image']; ?>" class="img-fluid" alt="Item Image">
        </div>
        <div class="col-md-4 item-details">
          <div class="item-title"><?php echo $row['Item_Title']; ?></div>
          <div class="item-description"><?php echo $row['Description']; ?></div>
          <div class="item-price">
            <strong>Current Bid: $<?php echo $current_bid; ?></strong><br>
            End Date: <?php echo $row['End_date']; ?>
          </div>
        
          <!-- Bidding Form -->
          <form action="place_bid.php" method="post">
            <input type="hidden" name="item_id" value="<?php echo $item_id; ?>">
            <div class="form-group">
              <label for="bidAmount">Your Bid Amount:</label>
              <input type="number" class="form-control" id="bidAmount" name="bidAmount" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Place Bid</button>
          </form>
        </div>
      </div>
      <?php
    } else {
      echo "Item not found.";
    }
  } else {
    echo "Invalid item ID.";
  }

  $conn->close();
  ?>
</div>


<!-- Include Bootstrap JS and jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
