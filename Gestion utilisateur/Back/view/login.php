<?php
    require('../config.php');
    session_start();

    if (isset($_POST['loginutilisateur'])){
        $loginutilisateur=$_POST['loginutilisateur'];
        $mdputilisateur=$_POST['mdputilisateur'];
        $sql="SELECT * FROM utilisateur WHERE loginutilisateur='" . $loginutilisateur . "' && mdputilisateur = '". $mdputilisateur."'";
		 
		
		
		
        $db = config::getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute();
            $count=$query->rowCount();
            if($count==1){
                $utilisateur=$query->fetch();
                $_SESSION['nomutilisateur'] = $utilisateur['nomutilisateur'];
                $_SESSION['idutilisateur'] = $utilisateur['idutilisateur'];
				
                              if( $_SESSION['loginutilisateur']=='admin'){header('Location:../afficherutilisateur.php');
							 }

             else{  header('Location:../index.php');}

            }
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
  } 

?>
	
	<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/logof.png">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Fagito</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>Fag<em>ito</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
               
                
               
            </ul>
          </div>
        </div>
      </nav>
    </header>
	

    <!-- Page Content -->
    <div class="page-heading contact-heading header-text" style="background-image: url(assets/images/heading-4-1920x500.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>Bienvenue</h4>
              <h2>Connexion</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
	
	<section></section>
	
   <div class="send-message">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading" style="color:#0F056B">
              <h2>  Se connecter  </h2>
            </div>
          </div>
          <div class="col-md-8">
            <div class="contact-form">
              <form id="contact" action="" method="post">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="loginutilisateur" type="text" class="form-control" id="loginutilisateur" placeholder="E-Mail" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="mdputilisateur" type="password" class="form-control" id="mdputilisateur" placeholder="Mot de passe" required="">
                    </fieldset>
                  </div>
              
                
                  <div align="center" class="col-lg-12">
                    <fieldset>
                      <button  type="submit" id="form-submit" class="filled-button">Envoyer</button>
					  <button type="submit" id="form-submit" class="filled-button">retour</button>
                    </fieldset>
                  </div>
				 
                </div>
			<br>
              </form>
			 
				<div align="left"> <a href="mdp.html" style="color:#0F056B"><u> Mot de passe oublié ! </u> </a> </div>
				 	
					  
					<div align="left"> <a href="ajouterutilisateur.php" style="color:#0F056B"><u>inscription</u> </a> </div>
            </div>
          </div>
		  <div class="col-md-4">
            <img src="menu1.jpg" class="img-fluid" alt="">
		</div>
          
        </div>
		
      </div>
    </div> 


    <footer class="bg3 p-t-75 p-b-32">
	<hr>
	<br>
		<div class="container">
			<div class="row">
				

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h6 class="stext-301 cl0 p-b-30">
						Aide
					</h6>

					<ul>
						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Contact
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Connexion
							</a>
						</li>


						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								FAQs
							</a>
						</li>
					</ul>
				</div>

				<div align="center" class="col-sm-6 col-lg-3 p-b-50">
					<h6 class="stext-301 cl0 p-b-30">
						Pour plus d'infos
					</h6>

					<p class="stext-107 cl7 size-201">
					  Visitez nos locaux à Ariana Soghra , Esprit , Technopol 
					</p>

					<div class="p-t-27">
						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-instagram"></i>
						</a>

						
					</div>
				</div>

				
			</div>

			
		</div>
	</footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
  </body>

</html>
   
        