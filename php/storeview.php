<!DOCTYPE html>
<?php
require_once './classes/person.php';
session_start();
?>

<html>

<head>
  <title>Seller's Store</title>
  <link rel="stylesheet" href="./css/product-card.css" />

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<style>
  .custom-margin {
    margin-top: 100px;
  }
</style>

<body>
  <?php

  include('navbar.php');

  ?>
  <div class="container custom-margin">


    <?php
    include('./includes/connect.php');

    if (isset($_GET['seller_id']) && is_numeric($_GET['seller_id'])) {
      $seller_id = $_GET['seller_id'];

      $seller_sql = "SELECT * FROM seller WHERE Seller_id = $seller_id";
      $seller_result = $con->query($seller_sql);

      if ($seller_result->num_rows > 0) {
        $seller_data = $seller_result->fetch_assoc();

        echo "<div class='container mt-4' '>";
        echo "<div class='text-center'>";
        echo "<h1>Welcome to " . $seller_data['Seller_FirstName'] . "'s Store</h1>";
        echo "<p>Contact: " . $seller_data['Seller_email'] . "</p>";
        echo "</div>";
        echo "</div>";

        echo "<div class='container'>";

        $items_sql = "SELECT * FROM item WHERE Seller_id = $seller_id";
        $items_result = $con->query($items_sql);

        if ($items_result->num_rows > 0) {
          echo "<div class='row'>";
          while ($item_data = $items_result->fetch_assoc()) {
            echo "<div class='col-md-4'>";
            echo "<div class='product mb-4 shadow-sm'>";
            echo "<img src='" . $item_data['Item_image'] . "' alt='Item Image'>";
            echo "<div class='card-body'>";
            echo "<h5 class='card-title'>" . $item_data['Item_Title'] . "</h5>";
            echo "<p class='card-text'>" . $item_data['Description'] . "</p>";
            echo "<p class='card-text'>Price: $" . $item_data['Starting_bid_price'] . "</p>";
            echo "<a href='item_description.php?item_id=" . $seller_id . "' class='btn btn-primary'>Bid Now</a>";
            // Add more item details as needed
            echo "</div>";
            echo "</div>";
            echo "</div>";
          }
          echo "</div>";
        } else {
          echo "<p class='text-center'>No items available in this store.</p>";
        }

        echo "</div>";
      } else {
        echo "<p class='text-center'>Seller not found.</p>";
      }
    } else {
      echo "<p class='text-center'>Invalid seller ID.</p>";
    }

    $con->close();
    ?>
  </div>
  <?php

  include('footer.php');

  ?>


  <!-- Include Bootstrap JS and jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>