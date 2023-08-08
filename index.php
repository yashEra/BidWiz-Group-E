<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="./php/css/product-card.css" />
  <link rel="stylesheet" href="./php/css/navbar.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>BidWiz</title>
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


    <script src="../js/navbar.js"></script>
  </navbar>

  <div class="header__container">
    <div class="forms-container">
      <img class="header__image" src="main.svg" alt="" align="right" />
      <div class="signin-signup">
        <form action="#" class="contact-form">
          <h2 class="title">Drop your words</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Name" />
          </div>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" placeholder="Email" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="textarea" placeholder="Massege....." />
          </div>
          <input type="submit" class="btn" value="Submit" />
          <p class="social-text"></p>
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>Who We are ?</h3>
          <p>
            BidWiz is an online auction website that provides a platform for
            users to bid on a wide range of products and items.
          </p>
          <button class="btn transparent" id="sign-up-btn">Contact</button>
        </div>
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>Have an any question ?</h3>
          <p>
            If you have any questions or inquiries, please fill out the form!.
          </p>
          <button class="btn transparent" id="sign-in-btn">Back</button>
        </div>
      </div>
    </div>
  </div>
  <script>
    const sign_in_btn = document.querySelector("#sign-in-btn");
    const sign_up_btn = document.querySelector("#sign-up-btn");
    const container = document.querySelector(".header__container");
    const header__image = document.querySelector(".header__image");

    sign_up_btn.addEventListener("click", () => {
      container.classList.add("sign-up-mode");
      header__image.style.display = "none";
    });

    sign_in_btn.addEventListener("click", () => {
      container.classList.remove("sign-up-mode");
      header__image.style.display = "block";
    });
  </script>

  <script src="app.js"></script>

  <!-- *********************************************** -->






    <div class="container mt-4">
      <!-- <div class="container mt-4"> -->
      <h2>Category 1 Items</h2>

      <div class="row">
        <?php
        // Replace with your database connection details
        $servername = "localhost";
        $username = "testuser";
        $password = "testuser";
        $dbname = "bidwiz";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }

        // Select items from Category 1
        $sql = "SELECT * FROM item WHERE Category_id = 1";
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
              <p class="card-text">End Date: <?php echo $row['End_date']; ?></p>
              <a href="./php/item_description.php?item_id=<?php echo $row['ItemNumber']; ?>" class="btn btn-primary">Bid Now</a>
            </div>
              </div>
            </div>
        <?php
          }
        } else {
          echo "No items found in Category 1.";
        }

        $conn->close();
        ?>
      </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



    <!-- ********************************************************************* -->

    <div class="container mt-4">
      <!-- <div class="container mt-4"> -->
      <h2>Category 2 Items</h2>

      <div class="row">
        <?php
        // Replace with your database connection details
        $servername = "localhost";
        $username = "testuser";
        $password = "testuser";
        $dbname = "bidwiz";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }

        // Select items from Category 1
        $sql = "SELECT * FROM item WHERE Category_id = 2";
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
              <p class="card-text">End Date: <?php echo $row['End_date']; ?></p>
              <a href="./php/item_description.php?item_id=<?php echo $row['ItemNumber']; ?>" class="btn btn-primary">Bid Now</a>
            </div>
              </div>
            </div>
        <?php
          }
        } else {
          echo "No items found in Category 1.";
        }

        $conn->close();
        ?>
      </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- ****************************************************************************** -->



    <iframe frameborder="0" scrolling="no" style="height:280px;width:100%;border:none;" src='./html/footer.html'></iframe>

  </body>

</html>