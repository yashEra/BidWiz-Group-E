<?php
require_once './DbConnector.php';
require_once './person.php';


use classes\DbConnector;

$dbcon = new DbConnector();
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"];
 
    $password = $_POST["password"];



    try {
        $con = $dbcon->getConnection();
        $query = "SELECT * FROM bidwiz.seller WHERE Seller_email = ? ";
        $pstmt = $con->prepare($query);
        $pstmt->bindValue(1, $email);
       
        $pstmt->execute();

        $rs = $pstmt->fetchAll(PDO::FETCH_OBJ);

        foreach($rs as $row){
            $dbpassword = $row->Seller_Password;
            $dbFirstName = $row->Seller_FirstName;
            $dbLastName = $row->Seller_LastName;
            $dbEmail = $row->Seller_email;
            $dbPhoneNo = $row->Seller_PhoneNumber;
            $dsid = $row->Seller_id;
            $dbaddress = $row->Seller_Address;
        }
       ;
        if (password_verify($password, $dbpassword)) {
           
            $seller = new seller($dbFirstName, $dbLastName, $dbEmail, $dbpassword,$dbaddress, $dsid, $dbPhoneNo);
            session_start();
            $_SESSION["seller"] = $seller;
            header("Location: ../seller_profile.php");
        exit;
        }else{
            
            header("Location: ../slogin.php?error=1");
            exit;
        }

    } catch (PDOException $exc) {
        echo $exc->getMessage();
    }

}

?>