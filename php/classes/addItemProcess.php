
<?php

require_once 'person.php';
session_start();
if (isset($_SESSION["seller"])) {
    $seller = $_SESSION["seller"];
} else {
    header("Location: ../additem.php?error=2");
    exit();
}


$servername = "localhost";
$username = "testuser";
$password = "testuser";
$dbname = "bidwiz";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $itemTitle = $_POST["item_title"];
    $categoryId = $_POST["category_id"];
    $startingBid = $_POST["starting_bid"];
    $endBid = $_POST["end_bid"];
    $startDate = $_POST["start_date"];
    $endDate = $_POST["end_date"];
    $description = $_POST["description"];
    $itemKeywords = $_POST["item_keywords"];


    $itemImage = $_FILES["item_image"]["name"];
    $itemImageTemp = $_FILES["item_image"]["tmp_name"];
    

    $uploadDir = "../images/items/";
    $targetFile = $uploadDir . basename($itemImage);
    $sellerId = $seller->getSellerId();
    $movieLocation = "../../images/items/". basename($itemImage);


    $stmt = $conn->prepare("INSERT INTO item (Category_id, Item_Title, Starting_bid_price, Start_date, End_date, End_price, Seller_id, Description, Item_image, Item_keywords)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("isssisssss", $categoryId, $itemTitle, $startingBid, $startDate, $endDate, $endBid, $sellerId, $description, $targetFile, $itemKeywords);

    if ($stmt->execute()) {

        move_uploaded_file($itemImageTemp, $movieLocation);
        
        echo "Item added successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>

























