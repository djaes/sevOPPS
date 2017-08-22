<?php 
	include 'include/var.php'; 
	include("connex/connexion.php");
	$requete_select_client=mysqli_query($dbprotect,"SELECT * FROM client WHERE idClient='".mysqli_real_escape_string($dbprotect,$_POST["idClient"])."'") or die(mysqli_error($dbprotect)); 
	include("connex/deconnexion.php");
	while($s=mysqli_fetch_array($requete_select_client)){
		$_SESSION["id"] = $s['idClient'];
		$_SESSION["prenom"]=$s['prenom'];
		$_SESSION["email"] = $s['email'];
	}
	
?>
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
    <link rel="shortcut icon" href="../images/iconBioactivfit.png">    

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
	<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-84920945-1', 'auto');
  ga('send', 'pageview');

	</script>
    
</head>
<body class="">
<div id="wrapper">
  <!-- preloader -->
  <div id="preloader">
    <div id="spinner">
      <img src="images/preloaders/1.gif" alt="">
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div>
  
  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: home -->
    <section id="home" class="bg-ligh ">
      <div class="display-table text-center">
        <div class="display-table-cell">
          <div class="container pt-0 pb-0"><div class="row">
              <div class="col-md-10 col-md-offset-1">
                <h2 class="font-weight-50 font-30 mb-0">Votre commande a bien été prise en compte. <br/> Vous recevrez sous peu votre boite de gélules BioActivFit cure minceur.</h2>
                  
                  
                <div class="soon" id="countdown-timer-soon-amor"
                  data-format="d,h,m,s"
                  data-layout="group"
                  data-scale-max="l"
                  data-due="2016-06-01"
                  data-face="flip color-light corners-round shadow-soft">
                </div>
                  <h3 class="font-20"  ><a href="backoffice-menu.php" style="text-decoration:underline; color:#FF00CC;"> Visiter votre espace personnel avec votre coaching minceur.</a></h3>
                


                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content --> 
  
  <!-- Footer -->
  <footer id="footer" class="footer bg-black-333 text-center pt-20 pb-20">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p class="mb-0"><?php echo $copyright; ?></p>
        </div>
      </div>
    </div>
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper --> 

<!-- Footer Scripts --> 
<!-- JS | Calendar Event Data --> 
<script src="js/calendar-events-data.js"></script> 
<!-- JS | Custom script for all pages --> 
<script src="js/custom.js"></script>

            </body>
    
</html>
    