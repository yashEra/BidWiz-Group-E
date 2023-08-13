<?php
require './DbConnector.php';
require './person.php';


use classes\DbConnector;

$dbcon = new DbConnector();
?>
<?php

session_start();
if (isset($_SESSION["buyer"])) {
    $buyer = $_SESSION["buyer"];
} else {
    header("Location: ./blogin.php?error=2");
    exit();
}
?>
<?php

$buyerID = $buyer->getbuyerId();
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstName = $_POST["firstname"];
    $lastName = $_POST["lastname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];


    try {
        $con = $dbcon->getConnection();
        $query = "UPDATE bidwiz.buyer SET Buyer_FirstName = ?, Buyer_LastName = ?, Buyer_email = ?, Buyer_PhoneNumber = ?, Buyer_Address = ? WHERE Buyer_id = ?";
        $pstmt = $con->prepare($query);
        $pstmt->bindValue(1, $firstName);
        $pstmt->bindValue(2, $lastName);
        $pstmt->bindValue(3, $email);
        $pstmt->bindValue(4, $phone);
        $pstmt->bindValue(5, $address);
        $pstmt->bindValue(6, $buyerID);

        $pstmt->execute();


        if ($pstmt->execute()) {
            // Unset all session variables
            $_SESSION = array();

            // Destroy the session
            session_destroy();




            try {
                $con = $dbcon->getConnection();
                $query = "SELECT * FROM bidwiz.buyer WHERE Buyer_id = ? ";
                $pstmt = $con->prepare($query);
                $pstmt->bindValue(1, $buyerID);
        
                $pstmt->execute();
        
                $rs = $pstmt->fetchAll(PDO::FETCH_OBJ);
        
                foreach($rs as $row){
                    $dbpassword = $row->Buyer_Password;
                    $dbFirstName = $row->Buyer_FirstName;
                    $dbLastName = $row->Buyer_LastName;
                    $dbEmail = $row->Buyer_email;
                    $dbPhoneNo = $row->Buyer_PhoneNumber;
                    $dbid = $row->Buyer_id;
                    $dbaddress = $row->Buyer_Address;
                    $propic = $row->profilePic;
                }
               
                
        
                    $buyer = new buyer($dbFirstName,$dbLastName,$dbEmail,$dbpassword,$propic,$dbPhoneNo,$dbaddress,$dbid);
                    session_start();
                    $_SESSION["buyer"] = $buyer;
                    header("Location: ../buyer_profile.php");
                    exit;
                
        
            } catch (PDOException $exc) {
                echo $exc->getMessage();
            }


        } else {
            header("Location: ../buyer_profile.php?error=1");
            exit;
        }
    } catch (PDOException $exc) {
        echo $exc->getMessage();
    }



}

?>