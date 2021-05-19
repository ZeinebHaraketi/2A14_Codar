<?php
    include "../controller/utilisateurC.php";
    include_once '../model/utilisateur.php';

	$utilisateurC = new utilisateurC();
	$error = "";

	if (
      isset($_POST["nomutilisateur"]) && 
       isset($_POST["prenomutilisateur"]) &&
		isset($_POST["eadresseutilisateur"]) &&
		isset($_POST["dateutilisateur"]) &&
		isset($_POST["loginutilisateur"]) &&
		isset($_POST["mdputilisateur"]) 
       
    ){
		if (
            !empty($_POST["nomutilisateur"]) && 
            !empty($_POST["prenomutilisateur"]) && 
			!empty($_POST["eadresseutilisateur"]) && 
			!empty($_POST["dateutilisateur"]) && 
			!empty($_POST["loginutilisateur"]) && 
			!empty($_POST["mdputilisateur"])  
           

        ) {
            $utilisateur = new utilisateur(
                $_POST['nomutilisateur'],
                $_POST['prenomutilisateur'], 
              	$_POST['eadresseutilisateur'],
				 $_POST['dateutilisateur'],
				$_POST['loginutilisateur'],
				$_POST['mdputilisateur']
            
            );
            
            $utilisateurC->modifierutilisateur($utilisateur, $_GET['idutilisateur']);
         
        }
        else
            $error = "Missing information";
	}

?>
<html>
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
              <h2>Modifier vos données</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
	
	<section></section>
	<hr>
        <div id="error">
            <?php echo $error; ?>
        </div>
		
		<?php
			if (isset($_GET['idutilisateur'])){
				$utilisateur = $utilisateurC->recupererutilisateur($_GET['idutilisateur']);
				
		?>
		<form action="" method="POST">
            <table align="center">
                <tr>
                    <td rowspan='6' colspan='1'></td>
                    <td>
                        <label for="nomutilisateur">Nom
                        </label>
                    </td>
                    <td><input type="text" name="nomutilisateur" id="nomutilisateur" maxlength="20" value = "<?php echo $utilisateur['nomutilisateur']; ?>" ></td>
                </tr>
                <tr>
                    <td>
                        <label for="prenomutilisateur">Prenom
                        </label>
                    </td>
                    <td><input type="text" name="prenomutilisateur" id="prenomutilisateur" maxlength="20" value = "<?php echo $utilisateur['prenomutilisateur']; ?>" ></td>
                </tr>
				    <tr>
                    <td>
                        <label for="eadresseutilisateur">Adresse
                        </label>
                    </td>
                    <td>
                        <input type="text" name="eadresseutilisateur" id="eadresseutilisateur"  value = "<?php echo $utilisateur['eadresseutilisateur']; ?>">
                    </td>
                </tr>
              
				<tr>
                    <td>
                        <label for="dateutilisateur">Date de naissance 
                        </label>
                    </td>
                    <td>
                        <input type="text" name="dateutilisateur" id="dateutilisateur"  value = "<?php echo $utilisateur['dateutilisateur']; ?> " >
                    </td>
                </tr>
				  
            
				<tr>
                    <td>
                        <label for="loginutilisateur">E-mail
                        </label>
						
                    </td>
                    <td>
                        <input type="text" name="loginutilisateur" id="loginutilisateur"  value = "<?php echo $utilisateur['loginutilisateur']; ?>">
						
                    </td>
                </tr>
				<tr>
                    <td>
                        <label for="mdputilisateur">Mot de passe 
                        </label>
                    </td>
                    <td>
                        <input type="password" name="mdputilisateur" id="mdputilisateur"  value = "<?php echo $utilisateur['mdputilisateur']; ?>">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input class="btn btn-danger"  style="background-color:#dc3545 "type="submit" value="Valider" name = "modifer"> 
                    </td>
                    <td>
                        <input class="btn btn-danger"  style="background-color:#dc3545 "type="reset" value="Annuler" >

                    </td>
				
        
                </tr>
				
            </table>
									<a href="../index.php" class="btn btn-danger"  style="background-color:#dc3545">Page précedente</a>
        </form>
		<?php
		}
		?>	
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










