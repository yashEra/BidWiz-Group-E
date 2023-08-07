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


  $conn = new mysqli($servername, $username, $password, $dbname);


  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }


  if (isset($_GET['item_id']) && is_numeric($_GET['item_id'])) {
    $item_id = $_GET['item_id'];


    $sql = "SELECT * FROM item WHERE ItemNumber = $item_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      ?>
      <div class="row">
        <div class="col-md-8">
          <img src="<?php echo $row['Item_image']; ?>" class="img-fluid" alt="Item Image">
        </div>
        <div class="col-md-4">
          <h2><?php echo $row['Item_Title']; ?></h2>
          <p><strong>Description:</strong></p>
          <p><?php echo $row['Description']; ?></p>
          <p><strong>Starting Bid:</strong> <?php echo $row['Starting_bid_price']; ?></p>
          <p><strong>End Price:</strong> <?php echo $row['End_price']; ?></p>
          <p><strong>Start Date:</strong> <?php echo $row['Start_date']; ?></p>
          <p><strong>End Date:</strong> <?php echo $row['End_date']; ?></p>
          <!-- You can add more item details here -->
          <a href="#" class="btn btn-primary">Bid Now</a>
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
