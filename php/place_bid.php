<?php
// Replace with your database connection details
$servername = "localhost";
$username = "testuser";
$password = "testuser";
$dbname = "bidwiz";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $item_id = $_POST['item_id'];
  $bidAmount = $_POST['bidAmount'];

  // Check if bid amount is within the allowed range
  $item_sql = "SELECT Starting_bid_price, End_price FROM item WHERE ItemNumber = $item_id";
  $item_result = $conn->query($item_sql);
  $item_data = $item_result->fetch_assoc();
  $start_price = $item_data['Starting_bid_price'];
  $end_price = $item_data['End_price'];

  if ($bidAmount < $start_price || $bidAmount > $end_price) {
    echo "Please place a bid between $start_price and $end_price.";
  } else {
    // Insert the bid into the database
    $insertBidSQL = "INSERT INTO bid (Bid_Price, Bid_Status, Buyer_id, Bid_Time, ItemNumber) 
                     VALUES ('$bidAmount', 1, 1, UNIX_TIMESTAMP(), $item_id)";

    if ($conn->query($insertBidSQL) === TRUE) {
        echo "Bid placed successfully.";
      } else {
        echo "Error updating current bid value: " . $conn->error;
      }
    }

} else {
  echo "Invalid request.";
}

$conn->close();
?>