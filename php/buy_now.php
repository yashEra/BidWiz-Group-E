<?php
namespace classes;
use PDOException;
use PDO;

require_once 'classes/DbConnector.php';

class TransactionHandler {
    private $db;

    public function __construct() {
        $dbConnector = new DbConnector();
        $this->db = $dbConnector->getConnection();
    }

    public function saveTransaction($transactionId, $transactionAmount) {
        try {
            // Prepare and execute the SQL query to insert data into the database
            $stmt = $this->db->prepare("INSERT INTO transaction (Transaction_id, Transaction_Amount, Transaction_Status) VALUES (:transactionId, :transactionAmount, 'Yes')");
            $stmt->bindParam(':transactionId', $transactionId);
            $stmt->bindParam(':transactionAmount', $transactionAmount);
            $stmt->execute();
            
            return true; // Successfully saved
        } catch (PDOException $ex) {
            // Handle the exception, e.g., log the error or show an error message to the user
            return false; // Failed to save
        }
    }

    public function validateCardDetails($cardNumber, $cvv) {
        // Validate card number (only digits)
        if (!preg_match('/^[0-9]+$/', $cardNumber)) {
            return "Card number must contain only numbers.";
        }

        // Validate CVV (only digits and length 3 or 4)
        if (!preg_match('/^[0-9]{3,4}$/', $cvv)) {
            return "CVV must contain only 3 or 4 digits.";
        }

        return ""; // Empty string means no validation error
    }
}

// Initialize message variables
$successMessage = "";
$errorMessage = "";

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["transactionId"]) && isset($_POST["transactionAmount"])) {
        $transactionId = $_POST["transactionId"];
        $transactionAmount = $_POST["transactionAmount"];

        // Create TransactionHandler instance
        $transactionHandler = new TransactionHandler();

        // Validate card details
        $validationMessage = $transactionHandler->validateCardDetails($_POST["cardNumber"], $_POST["cvv"]);
        if (!empty($validationMessage)) {
            $errorMessage = $validationMessage;
        } else {
            // Save transaction
            if ($transactionHandler->saveTransaction($transactionId, $transactionAmount)) {
                // Data saved successfully
                $successMessage = "Transaction saved successfully!";
            } else {
                // Failed to save data
                $errorMessage = "Failed to save transaction. Please try again.";
            }
        }
    } else {
        $errorMessage = "Transaction details are missing.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auction Website Payment</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!--other pages' styles-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="navbar.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">   

   
    <style>
        /* Add custom CSS for the gradient background */
        body {
            background: rgb(34,0,71);
    background: linear-gradient(90deg, rgba(34,0,71,1) 0%, rgba(0,254,255,1) 100%);
            margin: 0;
            padding: 0;
        }
        
        .container {
            margin-top: 50px;
        }

        .form-container {
            background-color: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>

<?php
  
  include('navbar.php');

  ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card"style="margin-top: 100px;">
                <div class="card-header"  >
                    <h4 class="card-title">Payment Details</h4>
                </div>
                <div class="card-body">
                    <?php if (!empty($successMessage)): ?>
                    <div class="alert alert-success"><?php echo $successMessage; ?></div>
                    <?php endif; ?>
                    
                    <?php if (!empty($errorMessage)): ?>
                    <div class="alert alert-danger"><?php echo $errorMessage; ?></div>
                    <?php endif; ?>

                    <form method="post" action="">
                        <div class="form-group">
                            <label for="transactionId">Transaction ID</label>
                            <input type="text" class="form-control" id="transactionId" name="transactionId" placeholder="Enter transaction ID" required>
                        </div>
                        <div class="form-group">
                            <label for="transactionAmount">Transaction Amount</label>
                            <input type="text" class="form-control" id="transactionAmount" name="transactionAmount" placeholder="Enter transaction amount" required>
                        </div>
                        <div class="form-group">
                            <label for="cardNumber">Card Number</label>
                            <input type="text" class="form-control" id="cardNumber" name="cardNumber" placeholder="Enter card number" required>
                        </div>
                        <div class="form-group">
                            <label for="cvv">CVV</label>
                            <input type="text" class="form-control" id="cvv" name="cvv" placeholder="Enter CVV" required>
                        </div>
                        <!-- Rest of the form fields -->
                        
                        <button type="submit" class="btn btn-primary btn-block">Pay Now</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Include Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
