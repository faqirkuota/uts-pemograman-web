<html lang="en">
<?php include("fungsi.php"); ?>

  <head>
      <?php
      $menu = ambil_menu();
      $project = ambil_project();
      $project1 = ambil_asset("project1");
      $project2 = ambil_asset("project2");
      $project3 = ambil_asset("project3");
      $project4 = ambil_asset("project4");
      ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

      <title><?php echo $menu[3]['menu']?></title>

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
                  <li class="scroll-to-section"><a href="<?php echo $menu[3]['dir']?>" class = "active"><?php echo $menu[3]['menu']?></a></li>
                  <li class="scroll-to-section"><a href="<?php echo $menu[4]['dir']?>"><?php echo $menu[4]['menu']?></a></li>
                  <li class="scroll-to-section"><a href="#"></a></li>
              </ul>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>

<div id="portfolio" class="our-portfolio section">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
            <h6><?php echo $project[0]?></h6>
            <h4><?php echo $project[1]?><em><?php echo $project[2]?></em></h4>
            <div class="line-dec"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
      <div class="row">
        <div class="col-lg-12">
          <div class="loop owl-carousel">
            <div class="item">
              <a href="<?php echo $project[11]?>">
                <div class="portfolio-item">
                <div class="thumb">
                  <img src="<?php echo $project1?>" alt="">
                </div>
                <div class="down-content">
                  <h4><?php echo $project[3]?></h4>
                  <span><?php echo $project[4]?></span>
                </div>
              </div>
              </a>  
            </div>
            <div class="item">
              <a href="<?php echo $project[12]?>">
                <div class="portfolio-item">
                <div class="thumb">
                  <img src="<?php echo $project2?>" alt="">
                </div>
                <div class="down-content">
                  <h4><?php echo $project[5]?></h4>
                  <span><?php echo $project[6]?></span>
                </div>
              </div>
              </a>  
            </div>
            <div class="item">
              <a href="<?php echo $project[13]?>">
                <div class="portfolio-item">
                <div class="thumb">
                  <img src="<?php echo $project3?>" alt="">
                </div>
                <div class="down-content">
                  <h4><?php echo $project[7]?></h4>
                  <span><?php echo $project[8]?></span>
                </div>
              </div>
              </a>  
            </div>
            <div class="item">
              <a href="<?php echo $project[14]?>">
                <div class="portfolio-item">
                <div class="thumb">
                  <img src="<?php echo $project4?>" alt="">
                </div>
                <div class="down-content">
                  <h4><?php echo $project[9]?></h4>
                  <span><?php echo $project[10]?></span>
                </div>
              </div>
              </a>  
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