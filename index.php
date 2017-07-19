<!DOCTYPE html>
<html dir="ltr" lang="en">
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
    
    
    <!--CSS | menuzord megamenu skins -->
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
     
    
    <!-- Revolution Slider 5.x CSS settings -->
    <link  href="js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
    <link  href="js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
    <link  href="js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>

    <!-- external javascripts -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- JS | jquery plugin collection for this theme -->
    <script src="js/jquery-plugin-collection.js"></script>

    <!-- Revolution Slider 5.x SCRIPTS -->
    <script src="js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
    <script src="js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>
    <script src="http://www.w3schools.com/lib/w3data.js"></script>   
    
</head>
    
<body class="boxed-layout pb-40 pt-sm-0">
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

        <!-- Main-content -->
        <div class="main-content">
            <!-- Section: slide -->
            <section id="slide" class="">
                <?php include 'include/home/slide.php'; ?>
            </section>
            
            <!-- Section: Descript -->   
            <section id="descript" class=" parallax layer-overlay overlay-white" data-bg-img="images/1920x1280.png">
                <?php include 'include/home/descript.php'; ?>
                
                
            
            </section>

            <!-- Section: Produit  -->
            <section id="product" class="bg-lighter">
                <?php include 'include/home/product.php'; ?>
            </section> 
            
            <!-- Section: temoignages -->
            <section id="witness" class="divider parallax layer-overlay overlay-white"  data-bg-img="http://placehold.it/1920x1280" >
                <?php include 'include/home/witness.php'; ?>
            </section>

        </div>
        
        <!-- end main-content -->


        <!-- Footer -->
        <?php include 'include/footer.php'; ?>
        <!-- End Footer -->  
    
        <!-- Modal -->
  <div class="modal modal-transparent fade active" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="no-background">
        
            
          
            
<section class="background modal-header" style="border-radius: 50px;box-shadow: inset 0 0 60px #cbf031, 0 0 5px #abc502;">
    <div class="" name="">
        <div class="row" style="margin: 0;" >
        
        <div class="text-center mb-12"><a href="#" class=""><img id="logoCMD" alt="" src="images/logo-favicon/logo_500X150.png"></a>
        </div>
    </div>
</div>
                <div class="row">
    <form class="imc" name="imc";>
        <div class="form-group col-md-8 bordered imc-range">
            <p style="text-align: center;">Votre situation à partir de l'IMC:</p>
            <div>
                <label for="form_size">Taille</label> 
                <input type="range" id="size" name="size" value="1.55" min="1.10" max="2.10" step="0.01" data-show-value="true"><output>1.55 Métres</output>
            </div>
            
            <div>
                <label for="form_weight">Poid</label>
                <input type="range" id="weight" name="weight" value="60" min="40" max="100" step="1" data-show-value="true"><output>60 kilos</output>
            </div>
        </div>

        <div class="form-group col-md-3 bordered imc-calcul">
            <label id="imcSituation" class="no-background">Corpulence normale</label>
            <br>
            <img id="imcSituation_img" src="images/IMC/ideal.png">
        </div>    
  </form>
</div>
      </section>      
            
        
        <div class="modal-body" style="padding: 30px;">
          <?php
            include ("cmForm.php");
            ?>	
            
        </div>
        
      </div>
      
    </div>
  </div>
        
        
        
    </div>
    
    <!-- end wrapper --> 
	<div class="modal" id="form_commande">
		<!-- Modal content -->
		<div class="modal-content">
			<span class="close">&times;</span>
			<?php
			//include ("commandFormHoriz.html");
			?>	
		</div>
	</div>
    
    
    
    <!-- modal -->
    <div class="modal fade" id="myModal1" role="dialog">
       <?php
        include ("commandForm.php");
        ?>	 
    </div>
    
    
    <!-- Scripts --> 
    <!-- JS | Calendar Event Data --> 
    <script src="js/calendar-events-data.js"></script> 
    <!-- JS | Custom script for all pages --> 
    <script src="js/custom.js"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
          (Load Extensions only on Local File Systems ! 
           The following part can be removed on Server for On Demand Loading) --> 
    <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script> 
    <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script> 
    <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script> 
    <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script> 
    <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script> 
    <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script> 
    <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script> 
    <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script> 
    <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>
    
    <script>
        $(document).ready(function(){
        $("#myBtn").click(function(){
            $("#myModal").modal();
    });
});
</script>
    <script type="text/javascript">
        function open_infos()
		{
		   /* width = 1000;
			height = 500;

			window.open('commandFormHoriz.html','CMD_Bioactivfit',' width='+width+', height='+height+'');*/
			$("#form_commande").show();
		}
		var modal = document.getElementById('form_commande');
		// Get the <span> element that closes the modal
		var span = document.getElementsByClassName("close")[0];

		// When the user clicks on <span> (x), close the modal
		span.onclick = function() {
			modal.style.display = "none";
		}

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}
    </script>
	
</body>
</html>