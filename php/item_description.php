<!DOCTYPE html>
<?php
require_once './classes/person.php';
session_start();

if (isset($_SESSION["buyer"])) {
  $buyer = $_SESSION["buyer"];
}
?>
<html>

<head>
  <title>Item Description</title>
  <link rel="stylesheet" href="./css/product-card.css" />

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

    button {
      color: #ececec;
      display: inline-block;
      text-decoration: none;
      background-color: #2c3e50;
      padding: 1.2rem 3rem;
      border-radius: 1rem;
      margin-top: 1rem;
      width: 50%;
      font-size: 14px;
      transition: all 0.2s;
    }

    button:hover {
      transform: scale(1.1);
    }
  </style>
</head>

<body>
  <?php

  include('navbar.php');
  include('./includes/connect.php');

  ?>

  <div class="container mt-4">
    <?php

    if (isset($_GET['item_id']) && is_numeric($_GET['item_id'])) {
      $item_id = $_GET['item_id'];


      $item_sql = "SELECT * FROM item WHERE ItemNumber = $item_id";
      $item_result = $con->query($item_sql);

      $bid_sql = "SELECT MAX(Bid_Price) AS CurrentBid, biddingdate FROM bid WHERE ItemNumber = $item_id";
      $bid_result = $con->query($bid_sql);
      $bid_data = $bid_result->fetch_assoc();
      $current_bid = $bid_data['CurrentBid'];
      $bidding_date = strtotime($bid_data['biddingdate']);

      if ($item_result->num_rows > 0) {
        $row = $item_result->fetch_assoc();

        $start_bid = $row['Starting_bid_price'];
        $end_price = $row['End_price'];
        $start_date = strtotime($row['Start_date']);
        $end_date = strtotime($row['End_date']);


        $bidding_open = ($current_bid < $end_price &&
          time() >= $start_date &&
          time() <= $end_date
          // time() >= $bidding_date
        );

    ?>
        <div class="row product" style="margin-top: 100px;">
          <div class="col-md-4">
            <img src="<?php echo $row['Item_image']; ?>" class="img-fluid item-image" alt="Item Image">
          </div>
          <div class="col-md-8 ">
            <h2 class="item-title"><?php echo $row['Item_Title']; ?></h2>



            <a href="storeview.php?seller_id=<?php echo $row['Seller_id']; ?>" style="width:50%;">View Store</a>

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
                <label for="bidAmount" <?php echo (isset($bidding_open) && !$bidding_open) ? 'hidden' : ''; ?>>Your Bid Amount:</label>
                <input type="number" class="form-control" id="bidAmount" name="bidAmount" min="<?php echo $start_bid; ?>" max="<?php echo $end_price; ?>" required <?php echo (isset($bidding_open) && !$bidding_open) ? 'hidden' : ''; ?>>
                <?php if (isset($bidding_open) && !$bidding_open) : ?>
                  <div class="text-danger">
                    <?php
                    if ($current_bid < $end_price || time() >= $start_date) {
                      echo '<strong>Times up!. Currently Bidding Closing! We are bidding open soon.</strong>';
                    } 
                    if (!$bidding_open) {
                      if (isset($_GET['item_id']) && is_numeric($_GET['item_id'])) {
                        $item_id = $_GET['item_id'];

                        $highest_bid_sql = "SELECT * FROM bid WHERE ItemNumber = $item_id ORDER BY Bid_Price DESC LIMIT 1";
                        $highest_bid_result = $con->query($highest_bid_sql);

                        if ($highest_bid_result->num_rows > 0) {
                          $highest_bid_row = $highest_bid_result->fetch_assoc();
                          $highest_bidder_id = $highest_bid_row['Buyer_id'];

                          $buyer_sql = "SELECT * FROM buyer WHERE Buyer_id = $highest_bidder_id";
                          $buyer_result = $con->query($buyer_sql);
                          $buyer_data = $buyer_result->fetch_assoc();

                          echo '<div class="product d-flex justify-content-center">';
                          echo '<div class="">';
                          echo '<div class="card-header bg-success text-white">';
                          echo '<h3 class="card-title">Winner Details</h3>';
                          echo '</div>';
                          echo '<div class="card-body">';
                          echo '<p><strong>Bid Amount:</strong> ' . $highest_bid_row['Bid_Price'] . 'LKR</p>';
                          echo '<p><strong>Buyer Name:</strong> ' . $buyer_data['Buyer_FirstName'] . ' ' . $buyer_data['Buyer_LastName'] . '</p>';
                          echo '<p><strong>Buyer Email:</strong> ' . $buyer_data['Buyer_email'] . '</p>';

                          // if ($highest_bidder_id == $buyer) {
                            
                            echo '<a href="buy_now.php?item_id=' . $item_id . '" class="btn btn-success">Buy Now</a>';

                        // } else {
                        //     echo '<button class="btn btn-success" disabled>Only Can Buy owener of winner account. if You want buy login winner account now!</button>';
                        // }
                          echo '</div>';
                          echo '</div>';
                          echo '</div>';
                        }
                      }

                      $con->close();
                    }
                    ?>

                <?php endif; ?>
              </div>
              <button type="submit" <?php echo (isset($bidding_open) && !$bidding_open) ? 'hidden' : ''; ?>>Place Bid</button>
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
    // if (time() >= $end_date ) {
    //   echo "Times up!. Currently Bidding Closing! We are bidding open soon.";
    // } elseif($current_bid >= $end_price){
    //   echo "Already someone got it!. Currently Bidding Closing! We are bidding open soon.";
    // }

    ?>
  </div><?php
        // ...


        // ...


        ?>




  <?php

  include('footer.php');

  ?>

  <!-- Include Bootstrap JS and jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>