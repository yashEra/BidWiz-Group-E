<!DOCTYPE html>
<html lang="en">
<?php
require_once './classes/person.php';
session_start();

?>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Faq</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->

  <link href="../css/navbar.css" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet"> -->
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">


  <link href="./css/faq.css" rel="stylesheet">
 
</head>

<body>
  
<?php
  
  include('navbar.php');

  ?>
  
<section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <section id="faq" class="faq">

            <div class="container" data-aos="fade-up">
      
              <header class="section-header">
                <p>Frequently Asked Questions</p><br>
                <h2>below you'll find answers to the most common question you may have on our Team</h2>
              </header>
      
              <div class="row">
                <div class="col-lg-12">
                  <!-- F.A.Q List 1-->
                  <div class="accordion accordion-flush" id="faqlist1">
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                          How do I register for an account on the auction website?
                        </button>
                      </h2>
                      <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                        <div class="accordion-body">
                          To participate in an auction, you'll need to create an account on our website. Once registered, browse through the available auctions, choose an item you're interested in, and place your bid. If you have the highest bid at the end of the auction, you win!
                        </div>
                      </div>
                    </div>
      
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                          What payment methods are accepted?
                        </button>
                      </h2>
                      <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                        <div class="accordion-body">
                          We offer a range of secure payment options, including credit/debit cards and online payment platforms. The specific payment methods available will be displayed during the checkout process.
                        </div>
                      </div>
                    </div>
                 </div>
                </div>
      
                <div class="col-lg-12">
      
                  <!-- F.A.Q List 2-->
                  <div class="accordion accordion-flush" id="faqlist2">
      
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-1">
                          How is shipping handled for purchased items?
                        </button>
                      </h2>
                      <div id="faq2-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                        <div class="accordion-body">
                          Shipping methods and costs may vary depending on the seller and the item's location. Sellers may provide details about shipping options, timelines, and associated costs on the item's page. It is recommended to review the seller's shipping information before bidding.
                        </div>
                      </div>
                    </div>
      
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-2">
                          What if I encounter a problem with a transaction or have a dispute?
                        </button>
                      </h2>
                      <div id="faq2-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                        <div class="accordion-body">
                          If you experience any issues or have concerns regarding a transaction, it is advisable to contact the auction website's customer support team. They can provide guidance, mediate disputes, and help resolve any problems that may arise.
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
                <div class="text-center text-lg-start">
                  <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                    <span>Read More</span>
                    <i class="bi bi-arrow-right"></i>
                  </a>
                </div>
              </div>
      
            </div>
      
          </section><!-- End F.A.Q Section -->
      
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="../images/faq.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>
    <i class="bi bi-list mobile-nav-toggle M_Mark"></i> 
  </section><!-- End Hero -->
   
  <!-- Vendor JS Files -->
  <script src="https://cdn.jsdelivr.net/npm/@srexi/purecounterjs/dist/purecounter_vanilla.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.2.0/js/glightbox.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  

  <!-- Template Main JS File -->
  <script src="../js/main.js"></script>
  <!--=============== MAIN JS ===============-->
  <!-- <script src="../js/navbar.js"></script> -->
  <?php
  
  include('footer.php');

  ?>

</body>

</html>