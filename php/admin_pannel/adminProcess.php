<?php
session_start();
require_once '../classes/DbConnector.php';

use classes\DbConnector;

$dbcon = new DbConnector();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    try {
        $con = $dbcon->getConnection();
        $query = "SELECT * FROM bidwiz.admin WHERE admin_email = :email LIMIT 1";
        $pstmt = $con->prepare($query);
        $pstmt->bindValue(':email', $email, PDO::PARAM_STR);
        $pstmt->execute();

        $row = $pstmt->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            $dbpassword = $row['admin_password'];

            if (password_verify($password, $dbpassword)) {
                $_SESSION['admin_id'] = $row['id']; // Store the user ID in the session
                header("Location: index.php");
                exit;
            } else {
                header("Location: adminlogin.php");
                exit;
            }
        } else {
            // Handle the case where no user was found with the provided email
            header("Location: adminlogin.php");
            exit;
        }
    } catch (PDOException $exc) {
        echo $exc->getMessage();
    }
}
?>
