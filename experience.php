<html lang="en">
<?php include("fungsi.php"); ?>

  <head>
      <?php
      $menu = ambil_menu();
      $experience = ambil_experience();
      $jatis = ambil_asset("jatis");
      $pegipegi = ambil_asset("pegipegi");
      $image1 = ambil_asset("experience1");
      $image2 = ambil_asset("experience2");
      ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

      <title><?php echo $menu[2]['menu']?></title>

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
                  <li class="scroll-to-section"><a href="<?php echo $menu[2]['dir']?>" class = "active"><?php echo $menu[2]['menu']?></a></li>
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

<div id="services" class="services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
            <h6><?php echo $experience[0]?></h6>
            <h4><?php echo $experience[1]?><em><?php echo $experience[2]?></em></h4>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="naccs">
            <div class="grid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="menu">
                    <div class="first-thumb active">
                      <div class="thumb">
                        <span class="icon"><img src="<?php echo $jatis?>" alt=""></span>
                          <?php echo $experience[3]?>
                      </div>
                    </div>
                    <div>
                      <div class="thumb">                 
                        <span class="icon"><img src="<?php echo $pegipegi?>" alt=""></span>
                          <?php echo $experience[4]?>
                      </div>
                    </div>
                  </div>
                </div> 
                <div class="col-lg-12">
                  <ul class="nacc">
                    <li class="active">
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-6 align-self-center">
                              <div class="left-text">
                                <h4><?php echo $experience[5]?></h4>
                                <p><?php echo $experience[6]?></p>
                                <div class="ticks-list"><span><i class="fa fa-check"></i> <?php echo $experience[7]?> </span> <span><i class="fa fa-check"></i> <?php echo $experience[8]?></span> <span><i class="fa fa-check"></i> <?php echo $experience[9]?></span>
                                  <span><i class="fa fa-check"></i> <?php echo $experience[10]?></span> <span><i class="fa fa-check"></i> <?php echo $experience[11]?></span> <span><i class="fa fa-check"></i> <?php echo $experience[12]?></span></div>
                                <p><?php echo $experience[13]?></p>
                              </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                              <div class="right-image">
                                <img src="<?php echo $image1?>" alt="">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-6 align-self-center">
                              <div class="left-text">
                                <h4><?php echo $experience[14]?></h4>
                                <p><?php echo $experience[15]?></p>
                                <div class="ticks-list"><span><i class="fa fa-check"></i><?php echo $experience[7]?></span> <span><i class="fa fa-check"></i><?php echo $experience[16]?></span> <span><i class="fa fa-check"></i><?php echo $experience[17]?></span>
                                  <span><i class="fa fa-check"></i><?php echo $experience[18]?></span> <span><i class="fa fa-check"></i><?php echo $experience[19]?></span> <span><i class="fa fa-check"></i><?php echo $experience[20]?></span></div>
                                <p><?php echo $experience[21]?></p>
                              </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                              <div class="right-image">
                                <img src="<?php echo $image2?>" alt="">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
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