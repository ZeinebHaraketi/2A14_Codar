<?php
 require_once "C:/xampp1/htdocs/omayma/controller/livraisonC.php" ; 
require_once "C:/xampp1/htdocs/omayma/model/livraison.php" ;
?>
<html>

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/favicon.ico">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>livraison</title>

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
          <a class="navbar-brand" href="index.html"><h2>FAGITO</h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Home
                      <span class="sr-only">(current)</span>
                    </a>
                </li> 

               
                <li class="nav-item"><a class="nav-link" href="menu.html">Menu</a></li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">livraison</a>
                    
                    <div class="dropdown-menu">
                       <a class="dropdown-item" href="Afficheoffre.php">offre</a>
                      <a class="dropdown-item" href="Ajoutlivraison.php">livraison de fidelité</a>
                      
                    </div>
                </li>
                
                <li class="nav-item"><a class="nav-link" href="contact.html">Contact Us</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url(GIFT.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>valider votre commande</h4>
              <h2>livraison à domicile</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="send-message">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>saisir votre données pour valider la commande de livraison </h2>
            </div>
          </div>
          <div class="col-md-8">
            <div class="contact-form">
              <form id="contact" action="" method="post">
              <table align="center">


<tr>
    <td>
        <label for="nom">Nom:
        </label>
    </td>
    <td><input type="text" class="form-control" name="nom" id="nom" maxlength="20" ></td>
</tr>
<tr>
    <td>
        <label for="prenom">Prenom:
        </label>
    </td>
    <td><input type="text" class="form-control" name="prenom" id="prenom" maxlength="20" ></td>
</tr>

<tr>
    <td>
        <label for="num">num:
        </label>
    </td>
    <td>
        <input type="text" class="form-control" name="num" id="num" >
    </td>

</tr>

<tr>
    <td>
        <label for="adresse">Adresse:
        </label>
    </td>
    <td>
        <input type="text" class="form-control" name="adresse" id="adresse" >
    </td>

</tr>
<tr>
    <td>
        <label for="mail">E-mail:
        </label>
    </td>
    <td>
    <input type="email" name="email" id="email" pattern=".+@gmail.com|.+@esprit.tn">
    
                        </td>

<tr>

    <td>
        <input type="submit" class="form-control" value="valider" name ="ajouter" required>
        	<?
  echo"hhhhhhhhhhhhhhhhhhhhhhhhhhhhhh"
  ?>
 
       
        
        

    </td>
    <td>
        <input type="reset" class="form-control" value="Annuler"  name ="annuler" >
        
    </td>
</tr>
</table>
              </form>
            </div>
          </div>
          <div class="col-md-4">
            <img src="welcome.jpg" class="img-fluid" alt="">

           
          </div>
        </div>
      </div>
    </div>

 

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
            <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                    <a class="nav-link" href="affichercommande.php">commande
                      <span class="sr-only">(current)</span>
                    </a>
                </li> 
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
  <?php


  // create user
  $user = null;
  
  // create an instance of the controller
  $userC = new livraisonC();
  if (
  
      isset($_POST["nom"]) &&
      isset($_POST["prenom"]) &&
      isset($_POST["num"])   &&
      isset($_POST["adresse"])   &&
      isset($_POST["mail"])
  ){
      if (
         
          !empty($_POST["nom"]) &&
          !empty($_POST["prenom"]) &&
          !empty($_POST["num"]) &&
          !empty($_POST["adresse"]) &&
          !empty($_POST["mail"])
  
      ) {
          $user = new livraison(
         
              $_POST['nom'],
              $_POST['prenom'],
              $_POST['num'],
              $_POST['adresse'],
              $_POST['mail'],
  
        );
          $userC->ajouterlivraison($user);
        //   header('Location:afficherlivraison.php');
      }
      else
          $error = "Missing information";
  }
  

  ?>
</html>
