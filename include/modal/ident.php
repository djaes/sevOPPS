<section class="background" style="max-width:400px;margin:auto;" >   
    <!-- Header -->
    <header style="margin: 10px;">
        <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times-circle-o" aria-hidden="true"></i>
        </button>            
        <p class="text-center" style="font-size:20px;text-transform: uppercase;">Accedez a votre compte en ligne</p>       
    </header>
    <!-- end Header -->
    <div class="loginmodal-container">
        
        
        <form method="post" action="backoffice-menu.php">
            <input type="text" name="login" placeholder="Identifiant ou e-mail">
            <input type="password" name="password" placeholder="Mot de passe">
            <input type="submit" name="send_login" class="login loginmodal-submit" value="Login">
        </form>

        <div class="login-help">
            <a href="#">Mot de passe oublié</a>
        </div>
    </div>   
</section>



