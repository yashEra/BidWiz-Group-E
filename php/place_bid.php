<?php
// Replace with your database connection details
$servername = "localhost";
$username = "testuser";
$password = "testuser";
$dbname = "bidwiz";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $item_id = $_POST['item_id'];
    $bidAmount = $_POST['bidAmount'];
  
    // Insert the bid into the database
    $insertBidSQL = "INSERT INTO bid (Bid_Price, Bid_Status, Buyer_id, Bid_Time, ItemNumber) 
                     VALUES ('$bidAmount', 1, 1, UNIX_TIMESTAMP(), $item_id)";
  
    if ($conn->query($insertBidSQL) === TRUE) {
      // Update the current bid value in the item table
      $updateItemSQL = "UPDATE item SET End_price = '$bidAmount' WHERE ItemNumber = $item_id";
      if ($conn->query($updateItemSQL) === TRUE) {
        echo "Bid placed successfully.";
      } else {
        echo "Error updating current bid value: " . $conn->error;
      }
    } else {
      echo "Error placing bid: " . $conn->error;
    }
  } else {
    echo "Invalid request.";
  }
  
  $conn->close();
  ?>
  
  
  
  
  
  