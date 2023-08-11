
<?php

require_once 'person.php';
session_start();
if (isset($_SESSION["seller"])) {
    $seller = $_SESSION["seller"];
    // header("Location: ../additem.php");
    // echo 'done';
} else {
    header("Location: ../additem.php?error=2");
    exit();
}


$servername = "localhost";
$username = "testuser";
$password = "testuser";
$dbname = "bidwiz";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $itemTitle = $_POST["item_title"];
    $categoryId = $_POST["category_id"];
    $startingBid = $_POST["starting_bid"];
    $endBid = $_POST["end_bid"];
    $startDate = $_POST["start_date"];
    $endDate = $_POST["end_date"];
    $description = $_POST["description"];
    $itemKeywords = $_POST["item_keywords"];

    // Get the Seller_id from the session
    // $sellerId = $_SESSION["seller_id"]; // Replace "seller_id" with your actual session variable name

    // Get the uploaded image details
    $itemImage = $_FILES["item_image"]["name"];
    $itemImageTemp = $_FILES["item_image"]["tmp_name"];
    
    // Modify the image upload path
    $uploadDir = "../images/items/";
    $targetFile = $uploadDir . basename($itemImage);
    $sellerId = $seller->getSellerId();
    $movieLocation = "../../images/items/". basename($itemImage);

    // Prepare and execute SQL query
    $stmt = $conn->prepare("INSERT INTO item (Category_id, Item_Title, Starting_bid_price, Start_date, End_date, End_price, Seller_id, Description, Item_image, Item_keywords)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("isssisssss", $categoryId, $itemTitle, $startingBid, $startDate, $endDate, $endBid, $sellerId, $description, $targetFile, $itemKeywords);

    if ($stmt->execute()) {
        // Move uploaded image to designated directory
        move_uploaded_file($itemImageTemp, $movieLocation);
        
        echo "Item added successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>

























