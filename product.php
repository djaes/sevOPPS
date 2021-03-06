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


<body class="boxed-layout pb-40 pt-sm-0">
    <div id="wrapper">
        <!-- preloader -->
        <div id="preloader">
            <div id="spinner">
                <img src="images/preloaders/1.gif" alt="">
            </div>
            <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
        </div>
        <!-- end preloader -->
        
        <!-- Header -->
        <?php include 'include/menuTop.php'; ?>
        <!-- end Header -->

        <!-- Main-content -->
        <div class="main-content">
            <!-- Section: inner-header -->
        <section class="inner-header divider parallax layer-overlay overlay-dark-4" data-bg-img="images/services/large.jpg">
            <a href="#" data-toggle="modal" data-target="#myModal" class="no-mobile" >
            <?php include 'include/witness/inner-header.php'; ?>
            </a>
        </section>
            <section class="descriptif">
                <div class="container">
                    <div class="row">
                        <?php include 'include/product/descript.php'; ?>
                    </div>
                </div>
            </section>
            <!-- Section: Features -->
            <section id="features" class="bg-lighter">
                <div class="container">
                    <?php include 'include/product/features2.php'; ?>
                </div>
            </section>
        </div>
        <!-- end main-content -->


        <!-- Footer -->
        <?php include 'include/footer.php'; ?>
        <!-- End Footer -->  
    
</div>
<!-- end wrapper --> 
    <!-- modal -->
    <?php include 'include/modal.php'; ?>
    


<!-- Scripts --> 

<!-- JS | Custom script for all pages --> 
<script src="js/custom.js"></script>


</body>
</html>