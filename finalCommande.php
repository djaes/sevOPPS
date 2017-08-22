<?php
 include("BDD/add-client.php");
?>
<!DOCTYPE html>
<html dir="ltr" lang="fr">
<head>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="author" content="ThemeMascot" />

    <!-- Page Title -->
    <title>Bioactivefit</title>

    <!-- Favicon and Touch Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="shortcut icon" href="images/iconBioactivfit.png">    

    <!-- Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/style-payment.css" rel="stylesheet" type="text/css">
    
    

    <!-- CSS | Main style file -->
    <link href="css/style-main.css" rel="stylesheet" type="text/css">

    <!-- CSS | Preloader Styles -->
    <link href="css/preloader.css" rel="stylesheet" type="text/css">

     
    <!-- external javascripts -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.redirect.js"></script>
	<script type="text/javascript" src="js/js-pdp.js"></script>
	<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-84920945-1', 'auto');
  ga('send', 'pageview');

	</script>
    
</head>
    
<body class="boxed-layout pb-40 " style="padding-right: 0px;" >
    <div id="wrapper">

        <!-- Header -->
<?php include 'include/var.php'; ?>

<header id="header" class="header">
	<div class="row">
		<a href="#"><img class="logo" src="<?php echo $logoPath; ?>" alt="" style="margin-left: 60px;"></a>
	</div>
</header>
        <!-- end Header -->

        <!-- Main-content -->
        <div class="main-content">
            <!-- Section: Descript -->   
            <section id="descript" style="background-color:#E5E5E5; color:#333;">
                <?php include 'include/commandForm/buyForm.php'; ?>
            </section>
        </div>
	</div>
    
	
</body>
</html>