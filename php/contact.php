<!DOCTYPE html>
<html lang="en">
<?php
require_once './classes/person.php';
session_start();

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/contact.css" rel="stylesheet">
    <!-- <link href="../css/navbar.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    </style>
</head>

<body>

<?php
  
  include('navbar.php');

  ?>

<?php 


if(isset($_POST['btn-send']))
{
   $UserName = $_POST['UName'];
   $Email = $_POST['Email'];
   $ContactNo = $_POST['ContactNo'];
   $Msg = $_POST['msg'];
   $mailHeaders = "Name: " . $UserName .
                "\r\n Email: ". $Email  . 
                "\r\n Phone: ". $ContactNo  . 
                "\r\n Message: " . $Msg . "\r\n";

   if(empty($UserName) || empty($Email) || empty($ContactNo) || empty($Msg))
   {
    header('location:contact.php?error');            
   }
   else
   {
    $to = "cst20099@std.uwu.ac.lk";
       if(mail( $to,$UserName,$Msg,$mailHeaders))
       {
        header("location:contact.php?success"); 
        
       }
   }
}

?>

    <body>
        <div class="background">
            <div class="contact__container">
                <div class="screen">

                    <div class="screen-body">
                        <div class="screen-body-item left">
                            <div class="app-title">
                                <span>CONTACT</span>
                                <span>US</span>
                            </div>
                            <div class="app-contact">CONTACT INFO : +1234567890</div>
                        </div>
                        <div class="screen-body-item">
                        <form action="contact.php" method="post">
                            <div class="app-form">
                                <div class="app-form-group">
                                    <input class="app-form-control" placeholder="NAME" type="text" name="UName">
                                </div>
                                <div class="app-form-group">
                                    <input class="app-form-control" placeholder="EMAIL" type="email" name="Email">
                                </div>
                                <div class="app-form-group">
                                    <input class="app-form-control" placeholder="CONTACT NO" type="text" name="ContactNo">
                                </div>
                                <div class="app-form-group message">
                                    <input class="app-form-control" placeholder="MESSAGE" type="text" name="msg">
                                </div>
                                <div class="app-form-group buttons">
                                    <button class="app-form-button" name="btn-send">SEND</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <?php 
                            $Msg = "";
                            if(isset($_GET['error']))
                            {
                                $Msg = " Please Fill in the Blanks ";
                                echo '<div class="alert alert-danger alert_head">'.$Msg.'</div>';
                            }

                            if(isset($_GET['success']))
                            {
                                $Msg = " Your Message Has Been Sent ";
                                echo '<div class="alert alert-success alert_head_1">'.$Msg.'</div>';
                            }
                        
                        ?>
            </div>
        </div>
        </div>
        <?php
  
  include('footer.php');

  ?>

    </body>

</html>