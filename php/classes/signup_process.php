<?php
namespace classes;
use PDOException;
use PDO;

require_once './DbConnector.php';

class UserRegistration {
    public function registerUser() {
        $dbConnector = new DbConnector();
        $conn = $dbConnector->getConnection();

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $firstName = $_POST['firstName'] ?? '';
            $lastName = $_POST['lastName'] ?? '';
            $email = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';
            $retypePassword = $_POST['retypePassword'] ?? ''; 
            $userType = $_POST['select'] ?? '';

            // input validation
            if (empty($firstName) || empty($lastName) || empty($email) || empty($password) || empty($retypePassword) || empty($userType)) {
                echo "Error: All fields are required.";
                exit();
            }

            // Email validation
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "Error: Invalid email format.";
                exit();
            }

            if ($password !== $retypePassword) {
                echo "Error: Passwords do not match.";
                exit();
            }

            // Hash the password
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

          
            try {
                if ($userType == '1') {
                    $sql = "INSERT INTO `buyer` (Buyer_FirstName, Buyer_LastName, Buyer_Password, Buyer_email, profilePic) VALUES ('$firstName', '$lastName', '$hashedPassword', '$email', '../images/default-user.jpg')";
                } elseif ($userType == '2') {
                    $sql = "INSERT INTO `seller` (Seller_FirstName, Seller_LastName, Seller_Password, Seller_email, profilePic) VALUES ('$firstName', '$lastName', '$hashedPassword', '$email', '../images/default-user.jpg')";
                }
                
                $conn->exec($sql);
              
                header("Location: ../prelogin.php");
                exit(); 
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        }

        $conn = null;
    }
}

$userRegistration = new UserRegistration();
$userRegistration->registerUser();
?>