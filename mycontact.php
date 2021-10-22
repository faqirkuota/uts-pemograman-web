 <html lang="en">
 <?php include("fungsi.php"); ?>

  <head>
      <?php
      $menu = ambil_menu();
      $mycontact = ambil_text("mycontact");
      $linkmaps = ambil_text("linkmaps");
      $nohp = ambil_text("nohp");
      $email = ambil_text("email");
      $alamat = ambil_text("alamat");
      $image = ambil_asset("contactimage");
      $icon1 = ambil_asset("contacticon1");
      $icon2 = ambil_asset("contacticon2");
      $icon3 = ambil_asset("contacticon3");
      ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

      <title><?php echo $menu[4]['menu']?></title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-digimedia-v3.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>
  
  <body>
  
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">

            <!-- ***** Menu Start ***** -->
              <ul class="nav">
                  <li class="scroll-to-section"><a href="<?php echo $menu[0]['dir']?>"><?php echo $menu[0]['menu']?></a></li>
                  <li class="scroll-to-section"><a href="<?php echo $menu[1]['dir']?>"><?php echo $menu[1]['menu']?></a></li>
                  <li class="scroll-to-section"><a href="<?php echo $menu[2]['dir']?>"><?php echo $menu[2]['menu']?></a></li>
                  <li class="scroll-to-section"><a href="<?php echo $menu[3]['dir']?>"><?php echo $menu[3]['menu']?></a></li>
                  <li class="scroll-to-section"><a href="<?php echo $menu[4]['dir']?>" class = "active"><?php echo $menu[4]['menu']?></a></li>
                  <li class="scroll-to-section"><a href="#"></a></li>
              </ul>
            <!-- ***** Menu End ***** -->

          </nav>
        </div>
      </div>
    </div>
  </header>
 
 <div id="contact" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
            <h6><?php echo $menu[4]['menu']?></h6>
            <h4><?php echo $mycontact?></h4>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <form id="contact" action="" method="post">
            <div class="row">
              <div class="col-lg-12">
                <div class="contact-dec">
                  <img src="<?php echo $image?>" alt="">
                </div>
              </div>
              <div class="col-lg-5">
                <div id="map">
                  <iframe src="<?php echo $linkmaps?>" width="100%" height="636px" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
              </div>
              <div class="col-lg-7">
                <div class="fill-form">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="info-post">
                        <div class="icon">
                          <img src="<?php echo $icon1?>" alt="">
                          <a href="#"><?php echo $nohp?></a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="info-post">
                        <div class="icon">
                          <img src="<?php echo $icon2?>" alt="">
                          <a href="#"><?php echo $email?></a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="info-post">
                        <div class="icon">
                          <img src="<?php echo $icon3?>" alt="">
                          <a href="#"><?php echo $alamat?></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
        
        </div>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/custom.js"></script>

</body>
</html>