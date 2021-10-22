<!DOCTYPE html>
<html lang="en">
<?php include("fungsi.php"); ?>

  <head>
      <?php
      $menu = ambil_menu();
      $nama = ambil_text("greeting");
      $jobtitle = ambil_text("titledesc");
      $desc = ambil_text("desc");
      $profilepict = ambil_asset("profile");
      ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title><?php echo $menu[0]['menu']?></title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-digimedia-v3.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>
<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->


  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">

            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="<?php echo $menu[0]['dir']?>" class = "active"><?php echo $menu[0]['menu']?></a></li>
              <li class="scroll-to-section"><a href="<?php echo $menu[1]['dir']?>"><?php echo $menu[1]['menu']?></a></li>
              <li class="scroll-to-section"><a href="<?php echo $menu[2]['dir']?>"><?php echo $menu[2]['menu']?></a></li>
              <li class="scroll-to-section"><a href="<?php echo $menu[3]['dir']?>"><?php echo $menu[3]['menu']?></a></li>
              <li class="scroll-to-section"><a href="<?php echo $menu[4]['dir']?>"><?php echo $menu[4]['menu']?></a></li>
              <li class="scroll-to-section"><a href="#"></a></li>
            </ul>        
            <!-- ***** Menu End ***** -->

          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner wow fadeIn" id="top" >
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-12">
                    <h6><?php echo $nama?></h6>
                    <h2><?php echo $jobtitle?></h2>
                    <p> <?php echo $desc?></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">

                <img src=<?php echo $profilepict?> alt="">
              </div>
            </div>
          </div>
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