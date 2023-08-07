<!DOCTYPE html>
<html>
<head>
  <title>Item Description</title>
  <!-- Include Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    .item-image {
      max-width: 100%;
      height: auto;
    }
    .item-details {
      padding: 20px;
      background-color: #f8f9fa;
      border: 1px solid #dee2e6;
      border-radius: 4px;
      margin-top: 20px;
    }
  </style>
</head>
<body>

<div class="container mt-4">
  <?php

  $servername = "localhost";
  $username = "testuser";
  $password = "testuser";
  $dbname = "bidwiz";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Get item ID from query parameter
  if (isset($_GET['item_id']) && is_numeric($_GET['item_id'])) {
    $item_id = $_GET['item_id'];

    // Select item details and current bid value from the database
    $item_sql = "SELECT * FROM item WHERE ItemNumber = $item_id";
    $item_result = $conn->query($item_sql);

    $bid_sql = "SELECT MAX(Bid_Price) AS CurrentBid, biddingdate FROM bid WHERE ItemNumber = $item_id";
    $bid_result = $conn->query($bid_sql);
    $bid_data = $bid_result->fetch_assoc();
    $current_bid = $bid_data['CurrentBid'];
    $bidding_date = strtotime($bid_data['biddingdate']);

    if ($item_result->num_rows > 0) {
      $row = $item_result->fetch_assoc();

      $start_bid = $row['Starting_bid_price'];
      $end_price = $row['End_price'];
      $start_date = strtotime($row['Start_date']);
      $end_date = strtotime($row['End_date']);

      // Check if bidding is open based on date and bid range
      $bidding_open = (
        $current_bid <= $end_price && 
        // $current_bid >= $start_bid &&
        time() >= $start_date && 
        time() <= $end_date &&
        time() >= $bidding_date
      );

      ?>
      <div class="row">
        <div class="col-md-4">
          <img src="<?php echo $row['Item_image']; ?>" class="img-fluid item-image" alt="Item Image">
        </div>
        <div class="col-md-8 item-details">
          <h2 class="item-title"><?php echo $row['Item_Title']; ?></h2>
          <p class="item-description"><?php echo $row['Description']; ?></p>
          Price Range: $<?php echo $start_bid; ?> - $<?php echo $end_price; ?><br>
          <div class="item-price">
            <strong>Current Bid: $<?php echo $current_bid; ?></strong><br>
            End Date: <?php echo $row['End_date']; ?>
          </div>

          <!-- Bidding Form -->
          <form action="place_bid.php" method="post">
  <input type="hidden" name="item_id" value="<?php echo $item_id; ?>">
  <div class="form-group">
    <label for="bidAmount">Your Bid Amount:</label>
    <input type="number" class="form-control" id="bidAmount" name="bidAmount" 
           min="<?php echo $start_bid; ?>" max="<?php echo $end_price; ?>" required>
    <?php if (isset($bidding_open) && !$bidding_open) : ?>
      <div class="text-danger">
        <?php 
        if (time() >= $end_date) {
          echo "Times up!. Currently Bidding Closing! We are bidding open soon.";
        } else {
          echo "Already someone got it!. Currently Bidding Closing! We are bidding open soon.";
        }
        ?>
      </div>
    <?php endif; ?>
  </div>
  <button type="submit" class="btn btn-primary btn-block" <?php echo (isset($bidding_open) && !$bidding_open) ? 'disabled' : ''; ?>>Place Bid</button>
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
