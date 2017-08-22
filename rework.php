<!DOCTYPE html>
<html dir="ltr" lang="fr">
<head>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="description" content="SportsTrainer- Sports, Health, Gym & Fitness Personal Trainer HTML5 Theme" />
    <meta name="keywords" content="building,business,construction,cleaning,transport,workshop" />
    <meta name="author" content="ThemeMascot" />

    <!-- Page Title -->
    <title>Bioactivefit</title>

    <!-- Favicon and Touch Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="shortcut icon" href="images/iconBioactivfit.png">    

    <!-- Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" type="text/css">
    <link href="css/css-plugin-collections.css" rel="stylesheet"/>
    
    <link href="css/style.css" rel="stylesheet" type="text/css">
    
    <!-- CSS | menuzord megamenu skins -->
    <link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-boxed.css" rel="stylesheet"/>
    <!-- CSS | Main style file -->
    <link href="css/style-main.css" rel="stylesheet" type="text/css">
    <!-- CSS | Theme Color -->
    <link href="css/colors/theme-skin-lemon.css" rel="stylesheet" type="text/css">
    <!-- CSS | Preloader Styles -->
    <link href="css/preloader.css" rel="stylesheet" type="text/css">
    <!-- CSS | Custom Margin Padding Collection -->
    <link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
    <!-- CSS | Responsive media queries -->
    <link href="css/responsive.css" rel="stylesheet" type="text/css">


    <!-- external javascripts -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- JS | jquery plugin collection for this theme -->
    <script src="js/jquery-plugin-collection.js"></script>

</head>


<body class="boxed-layout pb-40 pt-sm-0" >
<div id="wrapper">

  <!-- preloader -->
  <div id="preloader">
    <div id="spinner">
      <img src="images/preloaders/1.gif" alt="">
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div>


    <!-- Header -->
    <?php include 'include/menuTop.php'; ?>
    <!-- end Header -->

  

  <!-- main-content -->
    <div class="main-content">
        <select id="selectDescript" >
            <option value="nopal_descript">Nopal</option>
            <option value="framboise_descript">truc</option>
            <option value="ananas_descript">Nopal</option>
            <option value="guarana_descript">truc</option>
            <option value="raisin_descript">Nopal</option>
            <option value="papaye_descript">truc</option>
            <option value="the_descript">truc</option>
        </select>
        <div id="nopal_descript" class="row">
            <div class="col-md-4">
              <div class="">
                <img class="img-responsive img-fullwidth" src="images/descript/nopal.jpg" alt="">
              </div>
            </div>
            <div class="col-md-4">
              <h3 class="text-theme-colored">Bioactivfit</h3>
              <h5>Poudre de Nopal</h5>
              <p class="text-justify"><?php echo $poudreNopalDescript; ?></p>
            </div>
            <div class="col-md-4 pt-30">
              <div class="progressbar-container">
                <div class="progress-item">
                  <div class="progress-title">
                    <h6>Race </h6>
                  </div>
                  <div class="progress">
                    <div class="progress-bar bg-theme-colored appeared" data-percent="85" style="width: 85%;"><span class="percent">85%</span></div>
                  </div>
                </div>
                <div class="progress-item">
                  <div class="progress-title">
                    <h6>GYM </h6>
                  </div>
                  <div class="progress">
                    <div class="progress-bar bg-theme-colored appeared" data-percent="45" style="width: 45%;"><span class="percent">45%</span></div>
                  </div>
                </div>
                <div class="progress-item">
                  <div class="progress-title">
                    <h6>Boxing</h6>
                  </div>
                  <div class="progress">
                    <div class="progress-bar bg-theme-colored appeared" data-percent="95" style="width: 95%;"><span class="percent">95%</span></div>
                  </div>
                </div>
                <div class="progress-item">
                  <div class="progress-title">
                    <h6>Other</h6>
                  </div>
                  <div class="progress">
                    <div class="progress-bar bg-theme-colored appeared" data-percent="65" style="width: 65%;"><span class="percent">65%</span></div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div id="framboise_descript" class="row">
            <div class="col-md-4">
              <div class="">
                <img class="img-responsive img-fullwidth" src="images/descript/cetone-framboise.jpg" alt="">
              </div>
            </div>
            <div class="col-md-4">
              <h3 class="text-theme-colored">Bioactivfit</h3>
              <h5>Cétone de Framboise</h5>
              <p class="text-justify"><?php echo $cetonneFramboiseDescript; ?></p>
              </div>
            <div class="col-md-4 pt-30">
              <div class="progressbar-container">
                <div class="progress-item">
                  <div class="progress-title">
                    <h6>Race </h6>
                  </div>
                  <div class="progress">
                    <div class="progress-bar bg-theme-colored appeared" data-percent="85" style="width: 85%;"><span class="percent">85%</span></div>
                  </div>
                </div>
                <div class="progress-item">
                  <div class="progress-title">
                    <h6>GYM </h6>
                  </div>
                  <div class="progress">
                    <div class="progress-bar bg-theme-colored appeared" data-percent="45" style="width: 45%;"><span class="percent">45%</span></div>
                  </div>
                </div>
                <div class="progress-item">
                  <div class="progress-title">
                    <h6>Boxing</h6>
                  </div>
                  <div class="progress">
                    <div class="progress-bar bg-theme-colored appeared" data-percent="95" style="width: 95%;"><span class="percent">95%</span></div>
                  </div>
                </div>
                <div class="progress-item">
                  <div class="progress-title">
                    <h6>Other</h6>
                  </div>
                  <div class="progress">
                    <div class="progress-bar bg-theme-colored appeared" data-percent="65" style="width: 65%;"><span class="percent">65%</span></div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div id="ananas_descript" class="row">
            <div class="col-md-4">
              <div class="">
                <img class="img-responsive img-fullwidth" src="images/descript/ananas.jpg" alt="">
              </div>
            </div>
            <div class="col-md-4">
              <h3 class="text-theme-colored">Bioactivfit</h3>
              <h5>Extrait d'Ananas</h5>
              <p class="text-justify"><?php echo $extraitAnanasDescript; ?></p>
              
            </div>
            <div class="col-md-4 pt-30">
              <div class="progressbar-container">
                <div class="progress-item">
                  <div class="progress-title">
                    <h6>Race </h6>
                  </div>
                  <div class="progress">
                    <div class="progress-bar bg-theme-colored appeared" data-percent="85" style="width: 85%;"><span class="percent">85%</span></div>
                  </div>
                </div>
                <div class="progress-item">
                  <div class="progress-title">
                    <h6>GYM </h6>
                  </div>
                  <div class="progress">
                    <div class="progress-bar bg-theme-colored appeared" data-percent="45" style="width: 45%;"><span class="percent">45%</span></div>
                  </div>
                </div>
                <div class="progress-item">
                  <div class="progress-title">
                    <h6>Boxing</h6>
                  </div>
                  <div class="progress">
                    <div class="progress-bar bg-theme-colored appeared" data-percent="95" style="width: 95%;"><span class="percent">95%</span></div>
                  </div>
                </div>
                <div class="progress-item">
                  <div class="progress-title">
                    <h6>Other</h6>
                  </div>
                  <div class="progress">
                    <div class="progress-bar bg-theme-colored appeared" data-percent="65" style="width: 65%;"><span class="percent">65%</span></div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div id="guarana_descript" class="row">
            <div class="col-md-4">
              <div class="">
                <img class="img-responsive img-fullwidth" src="images/descript/guarana-poudre.jpg" alt="">
              </div>
            </div>
            <div class="col-md-4">
              <h3 class="text-theme-colored">Bioactivfit</h3>
              <h5>Poudre de Guarana</h5>
              <p class="text-justify"><?php echo $poudreGuaranaDescript; ?></p>
              
            </div>
            <div class="col-md-4 pt-30">
              <div class="progressbar-container">
                <div class="progress-item">
                  <div class="progress-title">
                    <h6>Race </h6>
                  </div>
                  <div class="progress">
                    <div class="progress-bar bg-theme-colored appeared" data-percent="85" style="width: 85%;"><span class="percent">85%</span></div>
                  </div>
                </div>
                <div class="progress-item">
                  <div class="progress-title">
                    <h6>GYM </h6>
                  </div>
                  <div class="progress">
                    <div class="progress-bar bg-theme-colored appeared" data-percent="45" style="width: 45%;"><span class="percent">45%</span></div>
                  </div>
                </div>
                <div class="progress-item">
                  <div class="progress-title">
                    <h6>Boxing</h6>
                  </div>
                  <div class="progress">
                    <div class="progress-bar bg-theme-colored appeared" data-percent="95" style="width: 95%;"><span class="percent">95%</span></div>
                  </div>
                </div>
                <div class="progress-item">
                  <div class="progress-title">
                    <h6>Other</h6>
                  </div>
                  <div class="progress">
                    <div class="progress-bar bg-theme-colored appeared" data-percent="65" style="width: 65%;"><span class="percent">65%</span></div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div id="raisin_descript" class="row">
            <div class="col-md-4">
              <div class="">
                <img class="img-responsive img-fullwidth" src="images/descript/marc-de-raisin.jpg" alt="">
              </div>
            </div>
            <div class="col-md-4">
              <h3 class="text-theme-colored">Bioactivfit</h3>
              <h5>Marc de Raisin</h5>
              <p class="text-justify"><?php echo $marcRaisinDescript; ?></p>
              
            </div>
            <div class="col-md-4 pt-30">
              <div class="progressbar-container">
                <div class="progress-item">
                  <div class="progress-title">
                    <h6>Race </h6>
                  </div>
                  <div class="progress">
                    <div class="progress-bar bg-theme-colored appeared" data-percent="85" style="width: 85%;"><span class="percent">85%</span></div>
                  </div>
                </div>
                <div class="progress-item">
                  <div class="progress-title">
                    <h6>GYM </h6>
                  </div>
                  <div class="progress">
                    <div class="progress-bar bg-theme-colored appeared" data-percent="45" style="width: 45%;"><span class="percent">45%</span></div>
                  </div>
                </div>
                <div class="progress-item">
                  <div class="progress-title">
                    <h6>Boxing</h6>
                  </div>
                  <div class="progress">
                    <div class="progress-bar bg-theme-colored appeared" data-percent="95" style="width: 95%;"><span class="percent">95%</span></div>
                  </div>
                </div>
                <div class="progress-item">
                  <div class="progress-title">
                    <h6>Other</h6>
                  </div>
                  <div class="progress">
                    <div class="progress-bar bg-theme-colored appeared" data-percent="65" style="width: 65%;"><span class="percent">65%</span></div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div id="papaye_descript" class="row">
            <div class="col-md-4">
              <div class="">
                <img class="img-responsive img-fullwidth" src="images/descript/papaye.jpg" alt="">
              </div>
            </div>
            <div class="col-md-4">
              <h3 class="text-theme-colored">Bioactivfit</h3>
              <h5>Extrait de Papaye</h5>
              <p class="text-justify"><?php echo $extraitPapayeDescript; ?></p>
              
            </div>
            <div class="col-md-4 pt-30">
              <div class="progressbar-container">
                <div class="progress-item">
                  <div class="progress-title">
                    <h6>Race </h6>
                  </div>
                  <div class="progress">
                    <div class="progress-bar bg-theme-colored appeared" data-percent="85" style="width: 85%;"><span class="percent">85%</span></div>
                  </div>
                </div>
                <div class="progress-item">
                  <div class="progress-title">
                    <h6>GYM </h6>
                  </div>
                  <div class="progress">
                    <div class="progress-bar bg-theme-colored appeared" data-percent="45" style="width: 45%;"><span class="percent">45%</span></div>
                  </div>
                </div>
                <div class="progress-item">
                  <div class="progress-title">
                    <h6>Boxing</h6>
                  </div>
                  <div class="progress">
                    <div class="progress-bar bg-theme-colored appeared" data-percent="95" style="width: 95%;"><span class="percent">95%</span></div>
                  </div>
                </div>
                <div class="progress-item">
                  <div class="progress-title">
                    <h6>Other</h6>
                  </div>
                  <div class="progress">
                    <div class="progress-bar bg-theme-colored appeared" data-percent="65" style="width: 65%;"><span class="percent">65%</span></div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div id="the_descript" class="row">
            <div class="col-md-4">
              <div class="">
                <img class="img-responsive img-fullwidth" src="images/descript/thea_sinensis.jpg" alt="">
              </div>
            </div>
            <div class="col-md-4">
              <h3 class="text-theme-colored">Bioactivfit</h3>
              <h5>Extrait de Thé vert</h5>
              <p class="text-justify"><?php echo $theVertDescript; ?></p>
              
            </div>
            <div class="col-md-4 pt-30">
              <div class="progressbar-container">
                <div class="progress-item">
                  <div class="progress-title">
                    <h6>Race </h6>
                  </div>
                  <div class="progress">
                    <div class="progress-bar bg-theme-colored appeared" data-percent="85" style="width: 85%;"><span class="percent">85%</span></div>
                  </div>
                </div>
                <div class="progress-item">
                  <div class="progress-title">
                    <h6>GYM </h6>
                  </div>
                  <div class="progress">
                    <div class="progress-bar bg-theme-colored appeared" data-percent="45" style="width: 45%;"><span class="percent">45%</span></div>
                  </div>
                </div>
                <div class="progress-item">
                  <div class="progress-title">
                    <h6>Boxing</h6>
                  </div>
                  <div class="progress">
                    <div class="progress-bar bg-theme-colored appeared" data-percent="95" style="width: 95%;"><span class="percent">95%</span></div>
                  </div>
                </div>
                <div class="progress-item">
                  <div class="progress-title">
                    <h6>Other</h6>
                  </div>
                  <div class="progress">
                    <div class="progress-bar bg-theme-colored appeared" data-percent="65" style="width: 65%;"><span class="percent">65%</span></div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
  <!-- end main-content -->
    <script type="text/javascript">
		$(document).ready(function(){
			$("#selectDescript").change(function(){
				var id = $("option:selected", this).val();
 
				$(".montreDiv").removeClass("montreDiv").addClass("cacheDiv");
				$("#"+id).removeClass("cacheDiv").addClass("montreDiv");
			});
		});
	</script>

  <!-- Footer -->
    <?php include 'include/footer.php'; ?>
  <!-- End Footer -->  
    
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a> </div>
<!-- end wrapper --> 


    <!-- modal -->
    <?php include 'include/modal.php'; ?>
    
<!-- Scripts --> 

<!-- JS | Custom script for all pages --> 
<script src="js/custom.js"></script>

</body>
</html>