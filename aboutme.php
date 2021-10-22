<html lang="en">
<?php include("fungsi.php"); ?>

  <head>
      <?php
      $menu = ambil_menu();
      $aboutme = ambil_text("aboutme");
      $titledescaboutme1 = ambil_text("titledescaboutme1");
      $titledescaboutme2 = ambil_text("titledescaboutme2");
      $descaboutme = ambil_text("descaboutme");
      $skillaboutme1 = ambil_text("skillaboutme1");
      $skillaboutme2 = ambil_text("skillaboutme2");
      $skillaboutme3 = ambil_text("skillaboutme3");
      $springboots = ambil_text( $skillaboutme1);
      $java = ambil_text($skillaboutme2);
      $sql = ambil_text($skillaboutme3);
      $aboutmepict = ambil_asset("aboutme");
      ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

      <title><?php echo $menu[1]['menu']?></title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-digimedia-v3.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>
  
  <body>
  
  <header class="header-area header-sticky wow slideInDown" >
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">

              <!-- ***** Menu Start ***** -->
              <ul class="nav">
                  <li class="scroll-to-section"><a href="<?php echo $menu[0]['dir']?>"><?php echo $menu[0]['menu']?></a></li>
                  <li class="scroll-to-section"><a href="<?php echo $menu[1]['dir']?>" class = "active"><?php echo $menu[1]['menu']?></a></li>
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

<div id="about" class="about section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6">
              <div class="about-left-image  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src=<?php echo $aboutmepict?> alt="">
              </div>
            </div>
            <div class="col-lg-6 align-self-center  wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
              <div class="about-right-content">
                <div class="section-heading">
                  <h6><?php echo $aboutme?></h6>
                  <h4><?php echo $titledescaboutme1?><em><?php echo $titledescaboutme2?></em></h4>
                  <div class="line-dec"></div>
                </div>
                <p><?php echo $descaboutme?></p>
                <div class="row">
                  <div class="col-lg-4 col-sm-4">
                    <div class="skill-item first-skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                      <div class="progress" data-percentage="80">
                        <span class="progress-left">
                          <span class="progress-bar"></span>
                        </span>
                        <span class="progress-right">
                          <span class="progress-bar"></span>
                        </span>
                        <div class="progress-value">
                          <div>
                              <?php echo $springboots?><br>
                            <span> <?php echo $skillaboutme1?></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-4">
                    <div class="skill-item second-skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                      <div class="progress" data-percentage="90">
                        <span class="progress-left">
                          <span class="progress-bar"></span>
                        </span>
                        <span class="progress-right">
                          <span class="progress-bar"></span>
                        </span>
                        <div class="progress-value">
                          <div>
                              <?php echo $java?><br>
                              <span> <?php echo $skillaboutme2?></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-4">
                    <div class="skill-item third-skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                      <div class="progress" data-percentage="80">
                        <span class="progress-left">
                          <span class="progress-bar"></span>
                        </span>
                        <span class="progress-right">
                          <span class="progress-bar"></span>
                        </span>
                        <div class="progress-value">
                          <div>
                              <?php echo $sql?><br>
                              <span> <?php echo $skillaboutme3?></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> 
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
  