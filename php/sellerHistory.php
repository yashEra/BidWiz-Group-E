<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./css/navbar.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./php/css/product-card.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>BidWiz- seller history</title>
</head>

<body>
<navbar class="navbar__section">
    <!--=============== HEADER ===============-->
    <header class="nav__header">
      <nav class="nav nav__container">
        <div class="nav__data">
          <a href="#" class="nav__logo">
            BidWiz
          </a>

          <div class="nav__toggle" id="nav-toggle">
            <i class="ri-menu-line nav__toggle-menu"></i>
            <i class="ri-close-line nav__toggle-close"></i>
          </div>
        </div>

        <!--=============== NAV MENU ===============-->
        <div class="nav__menu" id="nav-menu">
          <ul class="nav__list">
            <li>
              <a href="index.html" class="nav__link">Home</a>
            </li>

            <!--=============== DROPDOWN ===============-->
            <li class="dropdown__item">
              <div class="nav__link dropdown__button">
                Categories <i class="ri-arrow-down-s-line dropdown__arrow"></i>
              </div>

              <div class="dropdown__container">
                <div class="dropdown__content">
                  <div class="dropdown__group">


                    <span class="dropdown__title">Electronic Items</span>

                    <ul class="dropdown__list">
                      <li>
                        <a href="./html/categories.html" class="dropdown__link">Mobile $ Accesories</a>
                      </li>
                      <li>
                        <a href="./html/categories.html" class="dropdown__link">Homeware</a>
                      </li>
                      <li>
                        <a href="./html/categories.html" class="dropdown__link">Other</a>
                      </li>
                    </ul>
                  </div>

                  <div class="dropdown__group">


                    <span class="dropdown__title">Cloath</span>

                    <ul class="dropdown__list">
                      <li>
                        <a href="./html/categories.html" class="dropdown__link">men</a>
                      </li>
                      <li>
                        <a href="./html/categories.html" class="dropdown__link">women</a>
                      </li>
                      <li>
                        <a href="./html/categories.html" class="dropdown__link">Wrist watchers</a>
                      </li>
                    </ul>
                  </div>

                  <div class="dropdown__group">


                    <span class="dropdown__title">Sport Items</span>

                    <ul class="dropdown__list">
                      <li>
                        <a href="./html/categories.html" class="dropdown__link">Cloaths</a>
                      </li>
                      <li>
                        <a href="./html/categories.html" class="dropdown__link">Bat</a>
                      </li>
                      <li>
                        <a href="./html/categories.html" class="dropdown__link">ball</a>
                      </li>
                      <li>
                        <a href="./html/categories.html" class="dropdown__link">other</a>
                      </li>
                    </ul>
                  </div>

                  <div class="dropdown__group">


                    <span class="dropdown__title">other</span>

                    <ul class="dropdown__list">
                      <li>
                        <a href="./html/categories.html" class="dropdown__link">new</a>
                      </li>
                      <li>
                        <a href="./html/categories.html" class="dropdown__link">new</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>


            <li class="dropdown__item">
              <a href="./html/Faq.html" class="nav__link">FAQ</a>
            </li>

            <li>
              <a href="./html/About_us.html" class="nav__link">About us</a>
            </li>


            <li class="dropdown__item">
              <a href="./html/contact.html" class="nav__link">Contact us</a>

            </li>
            <li class="dropdown__item">
              <a href="./html/Login.html" class="nav__link">Login/Signup<i style="padding-left: 20px;" class="fa fa-user" aria-hidden="true"></i></a>


            </li>
          </ul>
        </div>
      </nav>
    </header>


    <br><br><br>
    
    <br><br>

<div class="container mt-4">
    <h2>Item Selling History</h2>
      <div class="row">
        <?php
    include('./includes/connect.php');

        if (isset($_GET['seller_id']) && is_numeric($_GET['seller_id'])) {
            $seller_id = $_GET['seller_id'];
      
        // Select items from Category 1
        $sql = "SELECT * FROM item WHERE Seller_id = $seller_id";
        $result = $conn->query($sql);
    

        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
        ?>
            <div class="col-md-4 mb-4">
              <div class="product ">
              <img src="<?php echo $row['Item_image']; ?>" class="card-img-top" alt="Item Image">
            <div class="card-body">
              <h5 class="card-title"><?php echo $row['Item_Title']; ?></h5>
              <p class="card-text"><?php echo $row['Description']; ?></p>
              <p class="card-text">Starting Bid: <?php echo $row['Starting_bid_price']; ?>LKR</p>
              <p class="card-text">End Price: <?php echo $row['End_price']; ?>LKR</p>
              <p class="card-text">End Date: <?php echo $row['End_date']; ?></p></div>
              </div>
            </div>
        <?php
          }
        } else {
          echo "No items found in Category 1.";
        }

        $conn->close();
    }
        ?>
      </div>
    </div>



    <?php
  
  include('footer.php');

  ?>

</body>
</html>