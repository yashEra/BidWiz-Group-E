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
        $query = "SELECT * FROM bidwiz.buyer WHERE Buyer_email = ? ";
        $pstmt = $con->prepare($query);
        $pstmt->bindValue(1, $email);
       
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
        }
       ;
        if (password_verify($password, $dbpassword)) {
           
            $buyer = new buyer($dbFirstName, $dbLastName, $dbEmail, $dbpassword,$dbaddress, $dbid, $dbPhoneNo);
            session_start();
            $_SESSION["buyer"] = $buyer;
            header("Location: ../buyer_profile.php");
        exit;
        }else{
            
            header("Location: ../blogin.php?error=1");
            exit;
        }

    } catch (PDOException $exc) {
        echo $exc->getMessage();
    }

}

?>