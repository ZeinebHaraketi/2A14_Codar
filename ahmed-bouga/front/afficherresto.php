<?php
 require_once "../controller/restoC.php" ;
 $userC = new restoC();
  $listeresto = $userC->afficherresto();

?>

<html>

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="nresto" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/favicon.ico">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">


    <title>offre</title>

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

                <li class="nav-item"><a class="nav-link" href="book-table.php">reservation</a></li>

                <li class="nav-item"><a class="nav-link" href="menu.html">Menu</a></li>

                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">restaurant</a>
                    
                    <div class="dropdown-menu">
                    
                      <a class="dropdown-item active" href="afficherresto.php">restaurant</a>
                      <a class="dropdown-item" href="Ajoutcarte.php">Carte de fidelité</a>
                    </div>
                </li>
                
                <li class="nav-item"><a class="nav-link" href="contact.html">Contact Us</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url(image2.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>trouver nos restaurants </h4>
              <h2>Offre</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="products">
      <div class="container">
        
               
<hr>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}
</style>

<h2>Card</h2>

<div class="card">  <?php foreach($listeresto as $user) { ?>
<a href="blog-details.html" class="services-item-image"> <img src="fagito.png" class="img-fluid" alt="" style="width:100%"></a>
  <div class="container">
    <h4><b>  <?php echo $user['id'] ;?></b></h4> 
    <p>  <?php echo $user['nom'] ;?></p> 
    <p>  <?php echo $user['email'] ;?></p> 
    <p>     <?php echo $user['adresse'] ;?></p> 
    <?php } ?>
  
  </div>
</div>



<!--
   <table border ='1'  align="center" width="100%" bgcolor="#ffffc4">    <?php foreach($listeresto as $user) { ?>
    
                  <thead>
				  
          <tr> <th>RESTO :</th>
            <th>identifient :</th>
            <th>Nom du restaurant :</th>
            <th>email :</th>
            <th>adresse :</th>
           
           
          </tr>
          </thead>
                        <tr>
    <td>
    <html>
<a href="blog-details.html" class="services-item-image"><img src="fagito.png" class="img-fluid" alt=""></a>
    </html>
    </td> 
    <td>
    <?php echo $user['id'] ;?>
    
  </td>
    <td>
    <?php echo $user['nom'] ;?>
   </td>
    <td>
    <?php echo $user['email'] ;?>
  </td>
    <td>
    <?php echo $user['adresse'] ;?>
</td>
   
     </tr>
    <?php } ?>
    
</table>
        
     -->   
                        
<div class="modal-footer">
           
            <a class="nav-link"  href="book-table.php">Book Now</a>
          </div>  

         
            <div class="contact-form">
              <div class="form-group">
                <hr>
                <h5 style="color:red"> ATTENTION : </h5>
               <h5> we LOVE you </h5>
              </div>


               
            
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

</html>