<?php
    include "../controller/utilisateurC.php";
    include_once '../model/utilisateur.php';
    session_start();
	
    $utilisateurC = new utilisateurC();
    $error = "";

    if (
       isset($_POST["nomutilisateur"]) && 
        isset($_POST["prenomutilisateur"]) &&
		isset($_POST["eadresseutilisateur"]) && 
        isset($_POST["dateutilisateur"]) && 
		
        isset($_POST["loginutilisateur"]) && 
        isset($_POST["mdputilisateur"]) &&
		isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"]
    ){
        if (
			!empty($_POST["nomutilisateur"]) && 
            !empty($_POST["prenomutilisateur"]) &&
			!empty($_POST["eadresseutilisateur"]) &&                                        
            !empty($_POST["dateutilisateur"]) && 
            !empty($_POST["loginutilisateur"]) && 
            !empty($_POST["mdputilisateur"])
        ) {
           if( preg_match ( " /^[a-zA-Z]{2,}$/ " , $_POST['nomutilisateur'] )==1 && preg_match (" /^[a-zA-Z]{2,}$/ ", $_POST['prenomutilisateur'] )==1 && preg_match ( ' /^.+@.+\.[a-z]{2,}$/ ' , $_POST['loginutilisateur'] )==1 && preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W)#', $_POST['mdputilisateur'])==1 )
		   {
            $utilisateur = new utilisateur(
                $_POST['nomutilisateur'],
                $_POST['prenomutilisateur'], 
				$_POST['eadresseutilisateur'],
                $_POST['dateutilisateur'],
                $_POST['loginutilisateur'],
                $_POST['mdputilisateur']
            );
		   
			$utilisateurC->ajouterutilisateur($utilisateur);
       
		   $status = "<p style='color:#FFFFFF; font-size:20px'>
            <span style='background-color:#46ab4a;'>Votre code captcha est correct.</span></p>";
			echo "Inscrit avec succès! Vous pouvez vous connecter <a href='login.php'>Cliquez ici</a>.";
        }else {
            echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";
           
            if(preg_match ( " /^[a-zA-Z]{2,}$/ " , $_POST['nomutilisateur'] )==0){echo 'Le nom doit contenir que des lettres '; echo "<br>";}
            if(preg_match ( " /^[a-zA-Z]{2,}$/ " , $_POST['prenomutilisateur'] )==0){echo 'Le prenom doit contenir que des lettres '; echo "<br>";}
            if(preg_match ( ' /^.+@.+\.[a-zA-Z]{2,}$/ '  , $_POST['loginutilisateur'] )==0){echo 'L email est incorrect '; echo "<br>";} 
			if(preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W){1,8}$#' , $_POST['mdputilisateur'] )==0) { echo 'Mot de passe non valide doit contenir un caractere une lettre en MAJ avec un minimum de 1 caractère et de 10 maximum.';}
			else {
				echo 'Mot de passe valide';
				}  
		}
		}
        else
            $error = "Missing information";
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
              <h2>inscription</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
	
	<section></section>
   
   
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                               
                                <div class="card-body">
                                    <form action="" method="POST">
                                        <table  align="center">
									
                                            <tr>
                                                <td>
                                                    <label class="small mb-1" for="nom"><b>Nom:</b></label>
                                                </td>
                                                <td>
                                                    <input class="form-control" type="text" name="nomutilisateur" id="nomutilisateur" maxlength="20" placeholder="Entrer le nom" required>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <label class="small mb-1" for="prenom"><b>Prénom:</b></label>
                                                </td>
                                                <td>
                                                    <input class="form-control" type="text" name="prenomutilisateur" id="prenomutilisateur" maxlength="20" placeholder="Entrer le prenom" required>
                                                </td>
                                            </tr>

                                           

                                  
                                           
                                            <tr>
                                             
												 <td>
                                                    <label class="small mb-1" for="dateutilisateur"><b>Date de naissance:</b></label>
                                                </td>
                                                <td>
                                                    <input  class="form-control" type="date" name="dateutilisateur" id="dateutilisateur">
                                                </td>
                                            </tr>
											 <tr>
                                                  <td>
                                                    <label class="small mb-1" ><b>Adresse :</b></label>
                                                </td>
                                                <td>
                                                    <input class="form-control" type="text" name="eadresseutilisateur" id="eadresseutilisateur"  placeholder="Entrer l'adresse" required>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <label class="small mb-1" for="login"><b>Adresse e-mail:</b></label>
                                                </td>
                                                <td>
                                                    <input class="form-control" type="email" name="loginutilisateur" id="loginutilisateur" placeholder="E-Mail" required>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <label class="small mb-1" for="password"><b>Mot de passe:</b></label>
                                                </td>
                                                <td>
                                                    <input class="form-control" type="password" name="mdputilisateur" id="mdputilisateur" placeholder="Entrer le mot de passe" required>
                                                </td>
                                            </tr>

                                           
                                </div>
								 <tr> 
                <td> 
													<label class="small mb-1" for="captcha"><b>Captcha:</b></label>
                                                 <img src="captcha.php"/></td>
                                                <td><input class="form-control" type="text" name="captcha"/> </td></tr>
                                 <tr align="center">
											
                                                <td> </td>
              
                                                <td>
												<br>
                                  
    <button  class="btn btn-danger"  style="background-color:#dc3545 ">Valider</button>
	<button   class="btn btn-danger"  style="background-color:#dc3545 ">Annuler</button>
		
                                                </td>
												
                                            </tr>
											
											
                                        </table>
                                       
                                    </form>
                                   
   
                                <!--<div class="btn btn-primary btn-block" onclick="myFunction()" >Imprimer la page</div>
                               
                                <script>
                                function myFunction() {
                                    window.print();
                                }
                                </script>
								-->
                            </div>
                       
                        </div>
                    </div>
                </div>                        
            </div>
        </div>



   

    
    <div class="send-message">
      <div class="container">
        
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
								Compte
							</a>
						</li>


						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								FAQs
							</a>
						</li>
					</ul>
				</div>

				<div  class="col-sm-6 col-lg-3 p-b-50">
					<h6  class="stext-301 cl0 p-b-30">
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
