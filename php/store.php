<!DOCTYPE html>
<html lang="en">

<?php
require_once './classes/item.php';
session_start();
if (isset($_SESSION["result"])) {
  $rs = $_SESSION["result"];
} else {
  exit();
}
?>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link rel="stylesheet" href="../css/store.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Open+Sans" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"></script>
  <link href="./css/navbar.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
  <title>BidWiz</title>

  <style>
    h2 {
      color: #000;
      font-size: 26px;
      font-weight: 300;
      text-align: center;
      text-transform: uppercase;
      position: relative;
      margin: 30px 0 60px;
      padding-top: 100px;
    }

    h2::after {
      content: "";
      width: 100px;
      position: absolute;
      margin: 0 auto;
      height: 4px;
      border-radius: 1px;
      background: #0eb2e4;
      left: 0;
      right: 0;
      bottom: -20px;
    }

    .carousel {
      margin: 50px auto;
      padding: 0 70px;
      /* top: 325px; */
    }

    .carousel .item {
      color: #747d89;
      min-height: 325px;
      text-align: center;
      overflow: hidden;
    }

    .carousel .thumb-wrapper {
      padding: 25px 15px;
      background: #fff;
      border-radius: 6px;
      text-align: center;
      position: relative;
      box-shadow: 0 2px 3px rgba(0, 0, 0, 0.2);
    }

    .carousel .item .img-box {
      height: 120px;
      margin-bottom: 20px;
      width: 100%;
      position: relative;
    }

    .carousel .item-price strike {
      opacity: 0.7;
      margin-right: 5px;
    }
  </style>

</head>

<body>


<?php
  
  include('navbar.php');

  ?>


  <!-- ************************************************************************************************ -->


  <div class="fixed-container">
    <div class="container-xl">
      <div class="row">
        <div class="col-md-12">
          <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
            <h2>Your Previous Items</h2>
            <div class="row">


              <?php
              foreach ($rs as $row) {
                $dbitemNumber = $row->ItemNumber;
                $dbitemTitle = $row->Item_Title;
                $dbEndPrice = $row->End_price;
                $dbbid = $row->Buyer_id;
                $dbsid = $row->Seller_id;
                $dbimage = $row->Item_image;

                $item = new item($dbitemNumber, $dbitemTitle, $dbEndPrice, $dbbid, $dbsid, $dbimage);
              ?>
                <div class="col-md-3 col-sm-6">
                  <div class="product-grid1">
                    <div class="product-image1">
                      <a href="#" class="image">
                        <img class="pic-1" src="<?php echo $item->getItemImage(); ?>">
                      </a>
                      <ul class="product-links1">
                        <li><a href="#"><i class="fa fa-shopping-bag"></i> Item Number Is: <?php echo $item->getItemNumber(); ?></a></li>

                      </ul>
                    </div>
                    <div class="product-content1">
                      <h3 class="title"><a href="#">Item Name:<?php echo $item->getItemTitle(); ?></a></h3>
                      <div class="price">Rs.<?php echo $item->getEndPrice(); ?></div>
                    </div>
                  </div>
                </div>
              <?php } ?>


            </div>
          </div>
        </div>
      </div>
    </div>



    <br><br><br>
    <?php
  
  include('footer.php');

  ?></body>





</html>