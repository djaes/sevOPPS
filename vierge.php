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

    <script>
    $.get("include/navBar.html", function(data){
        $("#menuBar").replaceWith(data);
    });
    </script>


    <!-- Revolution Slider 5.x SCRIPTS -->
    <script src="js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
    <script src="js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>

</head>
    
<body class="boxed-layout pb-40 pt-sm-0" data-bg-img="images/pattern/p8.png">
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
        
        
        
        
        
        <!-- end main-content -->


        <!-- Footer -->
        <?php include 'include/footer.php'; ?>
        <!-- End Footer -->  
    
    </div>
    <!-- end wrapper --> 
	<div class="modal" id="form_commande">
		<!-- Modal content -->
		<div class="modal-content">
			<span class="close">&times;</span>
			<?php
			include ("commandFormHoriz.html");
			?>	
		</div>
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