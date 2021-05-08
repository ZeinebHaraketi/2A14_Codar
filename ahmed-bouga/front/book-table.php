<?php
 require_once "../controller/reserC.php" ; 
require_once "../model/reser.php" ;
?>
<html>

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/fagito.png">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>FAGITO</title>

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
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">restaurant</a>
                
                <div class="dropdown-menu">
                   <a class="dropdown-item" href="afficherresto.php">restaurant</a>
               
                  
                </div>
            </li>
            
            <li class="nav-item"><a class="nav-link" href="contact.html">Contact Us</a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>

<!-- Page Content -->
<div class="page-heading about-heading header-text" style="background-image: url(image1.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="text-content">
          <h4>béneficiez-vous </h4>
          <h2>reservation</h2>
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
          <h2>Prenez votre reservation  </h2>
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
    <label for="dat">date:
    </label>
</td>
<td><input type="date" class="form-control" name="dat" id="dat" maxlength="20" ></td>
</tr>
<tr>
<td>
    <label for="nbp">nombres des places :
    </label>
</td>
<td>
    <input type="number" class="form-control" name="nbp" id="nbp"  >
</td>
</tr>
<tr>
<td>
    <label for="nresto">nresto:
    </label>
</td>
<td>
    <input type="text" class="form-control" name="nresto" id="nresto" required
       minlength="4" maxlength="8" size="10" >
</td>

</tr>
<tr>
<td>
    <label for="email">email:
    </label>
</td>
<td>
    <input type="text" class="form-control" name="email" id="email" pattern=".+@gmail.com|.+@esprit.tn" >
</td>

</tr>
<tr>

<td>
    <input type="submit" class="form-control" value="Ajouter" name ="ajouter">
</td>
<td>
    <input type="reset" class="form-control" value="Annuler" >
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
<?php


// create user
$user = null;

// create an instance of the controller
$userC = new reserC();
if (

    isset($_POST["nom"]) &&
    isset($_POST["dat"]) &&
    isset($_POST["nbp"])   &&
    isset($_POST["nresto"])   &&
    isset($_POST["email"])
){
    if (
       
        !empty($_POST["nom"]) &&
        !empty($_POST["dat"]) &&
        !empty($_POST["nbp"]) &&
        !empty($_POST["nresto"]) &&
        !empty($_POST["email"])

    ) {
        $user = new reser(
       
            $_POST['nom'],
            $_POST['dat'],
            $_POST['nbp'],
            $_POST['nresto'],
            $_POST['email'],

      );
        $userC->ajouterreser($user);
      //   header('Location:afficherreser.php');
    }
    else
        $error = "Missing information";
}


?>
 
</html>
