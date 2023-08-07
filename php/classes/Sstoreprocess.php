<?php
require_once './DbConnector.php';
require_once './item.php';

use classes\DbConnector;

$dbcon = new DbConnector();
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_POST["id"];


    try {
        $con = $dbcon->getConnection();
        $query = "SELECT * FROM bidwiz.item WHERE Seller_id = ? ";
        $pstmt = $con->prepare($query);
        $pstmt->bindValue(1, $id);

        $pstmt->execute();

        $rs = $pstmt->fetchAll(PDO::FETCH_OBJ);

        session_start();
        $_SESSION["result"] = $rs;
        header("Location: ../store.php");
        exit;
        
       
    } catch (PDOException $exc) {
        echo $exc->getMessage();
    }
}

?>