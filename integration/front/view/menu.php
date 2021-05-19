<?php
include "../controller/produitC.php";
$produitC=new produitC();
$listeproduit=$produitC->afficherproduit();

if(isset($_GET['recherche']))
                       {
                        $search_value=$_GET["recherche"];
                        
                        $listeproduit= $produit->recherche($search_value);
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
			
			
			 
                <li class="nav-item"><a class="nav-link" href="view/livraison.php">Livraison</a></li>
<li class="nav-item"><a class="nav-link" href="view/commande.html">Commande</a></li>

<li class="nav-item"><a class="nav-link" href="view/afficherresto.php">Restaurants</a></li>


                     <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Service Client</a>
                    
                    <div class="dropdown-menu">
                      
                      <a class="dropdown-item" href="view/Afficheoffre.php">Offres</a>
                      <a class="dropdown-item" href="view/Ajoutcarte.php">Carte fidélité</a>
                    </div>
                </li>
				   
				
				    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Espace Membre</a>
                    
                    <div class="dropdown-menu">
                      <a class="dropdown-item"  href="view/modifier.php?idutilisateur=<?PHP echo $_SESSION['idutilisateur']; ?>">Modifier vos donneés</a>
                      <a class="dropdown-item" href="view/deconnexion.php">Déconnexion</a>
                      
                    </div>
                </li>
                <li class="nav-item dropdown">
                
					 
                    
                    <div class="dropdown-menu">
					
				
                   
                      
                      
                    </div>
                </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url(../Front/assets/images/heading-6-1920x500.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>On vous présente</h4>
              <h2>Nos Produits</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

	
    <div class="products">
	 <!-- Recherche-->
			 
			           <div class="form-group">
                            <div class="input-group input-group-lg">
                                <!--<input type="search" class="form-control form-control-lg" placeholder="entrer votre produit" value="">
								-->

                                   <form method="get" action="menu.php"  class="mb-4">
                                   <input type="text" class="form-control" name="recherche" placeholder="produit">
                                   <br>
                                   <input type="submit" class="btn btn-primary "  value="Chercher">
                                   <style>
							                  	  input{
                                        margin: 13px 12px 12px 10px;
										
                                        }
								                    </style>
                                    </form>

                            

                                
                            </div>
                        </div>
	<?php
				  foreach($listeproduit as $row){
				  ?>
		
      <div class="container">
	     <!--  /card -->
          <div class="card2">
			<div class="card" >
			<!--
            <img src="../View/Front/assets/images/product-6-370x270.jpg" alt="" style="width:100%" height="200px">
			-->
			 
			<?PHP echo "<img  src='images/".$row['image']."' >"; ?>
            <div>
			<h1><?php echo $row['nom_produit'];?></h1>
			</div>
            
			<div>
			<p class="price"><center><?php echo $row['prix'];?></center></p>
			</div>
			
            <p> <center><?php echo $row['categorie'];?></center></p>
            <p><button>Commander</button></p>
			
			<style>
			
			.card2{
				
				flex-direction: column;

				display: inline-block;
				
				box-shadow:0 4px 8px 0 rgba (0,0,0,0.6);
  transition: 0.4s;
  width: 250px;
  background:#fff;
  text-align:center;
  font-size :16px;
  font-family : sans-cherif;
  float:left;
  margin:10px;
			}
	
			.card {
                    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
                    max-width: 250px;
                    margin: auto;
                    text-align: center;
                    font-family: arial;
					
                  }

			
            .price {
                    color: grey;
                    font-size: 22px;
                   }

            .card button {
                    border: none;
                    outline: 0;
                    padding: 12px;
                    color: white;
                    background-color: #000;
                    text-align: center;
                    cursor: pointer;
                    width: 100%;
                    font-size: 18px;
                        }

            .card button:hover {
                    opacity: 0.7;
                               }
			
			
			</style>
			
			
            </div>
			 
          
		  <!--  ./card -->
			
			
			</div>
        
      </div>
	  
	  <?PHP
				      }
		  	         ?>
					
	
	
	
	
	<hr>
	

        <footer>
	 <div class="row">
         
          <div class="col-md-12">
            <ul class="pages">
              <li><a href="index.html">1</a></li>
              <li class="active"><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              
              <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
            </ul>
			
          </div>
 
    </div>  
	</footer>	  
        </div>

    <br>
    
	
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Book Now</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="contact-form">
              <form action="#" id="contact">
                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Pick-up location" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Return location" required="">
                          </fieldset>
                       </div>
                  </div>

                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Pick-up date/time" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Return date/time" required="">
                          </fieldset>
                       </div>
                  </div>
                  <input type="text" class="form-control" placeholder="Enter full name" required="">

                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter email address" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter phone" required="">
                          </fieldset>
                       </div>
                  </div>
              </form>
           </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary">Book Now</button>
          </div>
        </div>
      </div>
    </div>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
  </body>

</html>
