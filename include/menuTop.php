<?php include 'include/var.php'; ?>

<header id="header" class="header no-background">
    <div class="navbar-scrolltofixed shadow-menu" >
        <div class="header-nav no-background">
           <div class="header-nav-wrapper no-background">
               <div class="row">
                   <div class="col-md-14">
                       <div id="menuzord-right" class="menuzord orange no-bg">
                           <a href="https://bioactivfit.fr/index.php"><img class="logo" src="<?php echo $logoPath; ?>" alt="" style="margin-left: 60px;"></a>
                           <ul class="menuzord-menu">
                               <li>
                                   <a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Accueil</a>
                               </li>
                               <li>
                                   <a href="product.php"><i class="fa fa-flask" aria-hidden="true"></i> Principe Actif</a>
                               </li>
                               <li>
                                   <a href="witness.php"><i class="fa fa-commenting" aria-hidden="true"></i> Témoignages</a>
                               </li>
                               <li>
                                   <a href="#" data-toggle="modal" data-target="#myModal" class="no-mobile" ><i class="fa fa-shopping-cart" aria-hidden="true"></i> Commander</a>
                               </li>
							   <?php
									if(isset($_SESSION["id"])){
										echo "	<li class='connect'>
													<a href='backoffice-menu.php'><i class='fa fa-unlock'></i>espace perso (".$_SESSION['prenom'].")</a>
												</li>
												<li>
													<a href='de-authentification.php' ><i class='fa fa-sign-out' aria-hidden='true'></i>Se déconnecter</a>
												</li>";
									}
									else{
										echo "	<li class='connect'>
													<a href='#' data-toggle='modal' data-target='#myIdent' class='no-mobile' ><i class='fa fa-sign-in' aria-hidden='true'></i>Se connecter</a>
												</li>";
									}
								?>
                           </ul>
                        </div>
                    </div>        
                </div>                 
            </div> 
        </div> 
    </div>
</header>
