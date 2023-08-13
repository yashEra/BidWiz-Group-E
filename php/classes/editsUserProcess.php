<?php
require './DbConnector.php';
require './person.php';


use classes\DbConnector;

$dbcon = new DbConnector();
?>
<?php

session_start();
if (isset($_SESSION["seller"])) {
    $seller = $_SESSION["seller"];
} else {
    header("Location: ./slogin.php?error=2");
    exit();
}
?>
<?php

$sellerID = $seller->getsellerId();
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstName = $_POST["firstname"];
    $lastName = $_POST["lastname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];


    try {
        $con = $dbcon->getConnection();
        $query = "UPDATE bidwiz.seller SET Seller_FirstName = ?, Seller_LastName = ?, Seller_email = ?, Seller_PhoneNumber = ? , Seller_Address = ? WHERE Seller_id = ?";
        $pstmt = $con->prepare($query);
        $pstmt->bindValue(1, $firstName);
        $pstmt->bindValue(2, $lastName);
        $pstmt->bindValue(3, $email);
        $pstmt->bindValue(4, $phone);
        $pstmt->bindValue(5, $address);
        $pstmt->bindValue(6, $sellerID);

        $pstmt->execute();


        if ($pstmt->execute()) {
            $_SESSION = array();

            
            session_destroy();




            try {
                $con = $dbcon->getConnection();
                $query = "SELECT * FROM bidwiz.seller WHERE Seller_id = ? ";
                $pstmt = $con->prepare($query);
                $pstmt->bindValue(1, $sellerID);
        
                $pstmt->execute();
        
                $rs = $pstmt->fetchAll(PDO::FETCH_OBJ);
        
                foreach($rs as $row){
                    $dbpassword = $row->Seller_Password;
                    $dbFirstName = $row->Seller_FirstName;
                    $dbLastName = $row->Seller_LastName;
                    $dbEmail = $row->Seller_email;
                    $dbid = $row->Seller_id;
                    $dbphone = $row->Seller_PhoneNumber;
                    $dbaddress = $row->Seller_Address;
                    $propic = $row->profilePic;
                }
               
                
        
                    $seller = new seller($dbFirstName,$dbLastName,$dbEmail,$dbpassword,$propic,$dbphone,$dbaddress,$dbid);
                    session_start();
                    $_SESSION["seller"] = $seller;
                    header("Location: ../seller_profile.php");
                    exit;
                
        
            } catch (PDOException $exc) {
                echo $exc->getMessage();
            }


        } else {
            header("Location: ../seller_profile.php?error=1");
            exit;
        }
    } catch (PDOException $exc) {
        echo $exc->getMessage();
    }



}

?>