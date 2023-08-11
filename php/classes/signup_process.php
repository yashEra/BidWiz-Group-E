<?php
namespace classes;

class DbConnector {
    private $host = "localhost";
    private $dbname = "bidwiz";
    private $dbuser = "testuser";
    private $dbpsw = "testuser";

    public function getConnection() {
        $dsn = "mysql:host=$this->host;dbname=$this->dbname"; 
        try {
            $con = new \PDO($dsn, $this->dbuser, $this->dbpsw);
            $con->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); // Set PDO error mode
            return $con;
        } catch (\PDOException $e) {
            die("error:" . $e->getMessage());
        }
    }
}

$dbConnector = new DbConnector(); 
$conn = $dbConnector->getConnection(); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST['firstName'] ?? '';
    $lastName = $_POST['lastName'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $retypePassword = $_POST['retypePassword'] ?? ''; 
    $userType = $_POST['select'] ?? '';

    if ($userType == '1') { 
        $phoneNumber = $_POST['phoneNumber'] ?? ''; // Capture the phone number
        $address = $_POST['address'] ?? ''; // Capture the address
        $sql = "INSERT INTO `buyer` (Buyer_FirstName, Buyer_LastName, Buyer_Password, Buyer_PhoneNumber, Buyer_Address, Buyer_email) VALUES ('$firstName', '$lastName', '$password', '$phoneNumber', '$address', '$email')";

    } elseif ($userType == '2') { 
        $phoneNumber = $_POST['phoneNumber'] ?? ''; // Capture the phone number
        $accountNumber = $_POST['accountNumber'] ?? ''; // Capture the account number
        $routingNumber = $_POST['routingNumber'] ?? ''; // Capture the routing number
        $address = $_POST['address'] ?? ''; // Capture the address

        if ($password === $retypePassword) { 
            $sql = "INSERT INTO `seller` (Seller_FirstName, Seller_LastName, Seller_Password, Seller_PhoneNumber, Seller_AccountNumber, Routing_Number, Seller_Address, Seller_email) VALUES ('$firstName', '$lastName', '$password', '$phoneNumber', '$accountNumber', '$routingNumber', '$address', '$email')";

        } else {
            echo "Error: Passwords do not match.";
            exit(); 
        }
    }

    try {
        $conn->exec($sql);
        echo "User registered successfully.";
    } catch (\PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

$conn = null;
?>
