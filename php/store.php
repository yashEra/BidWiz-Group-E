<!DOCTYPE html>
<html lang="en">

<?php
require_once './classes/item.php';
require_once './classes/person.php';

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
  <link rel="stylesheet" href="./css/store.css" />
  <link rel="stylesheet" href="./css/product-card.css" />
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
                $dbDescription = $row->Description;
                $dbStartingBid = $row->Starting_bid_price;
                $dbEndPrice = $row->End_price;
                $dbEndDate = $row->End_date;
                $dbItemImage = $row->Item_image;
                $dbsid = "";
                $dbbid = "";

                $item = new item($dbitemNumber, $dbitemTitle, $dbEndPrice, $dbbid, $dbsid, $dbItemImage);
              ?>
                <div class="col-md-4 mb-4">
                  <div class="product">
                    <img src="<?php echo $dbItemImage; ?>" class="card-img-top" alt="Item Image">
                    <div class="card-body">
                      <h5 class="card-title"><?php echo $dbitemTitle; ?></h5>
                      <p class="card-text"><?php echo $dbDescription; ?></p>
                      <p class="card-text">Starting Bid: <?php echo $dbStartingBid; ?>LKR</p>
                      <p class="card-text">End Price: <?php echo $dbEndPrice; ?>LKR</p>
                      <p class="card-text">End Date: <?php echo $dbEndDate; ?></p>
                      <a href="./php/item_description.php?item_id=<?php echo $dbitemNumber; ?>&seller_id=<?php echo $dbsid; ?>" class="btn btn-primary">Bid Now</a>
                      <!-- Ensure that the seller ID ($dbsid) is properly included in the URL for item_description.php -->
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

    ?>
</body>





</html>