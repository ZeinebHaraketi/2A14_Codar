<?php
include "C:/xampp/htdocs/sindafinal/controller/offreC.php";
include_once 'C:/xampp/htdocs/sindafinal/model/offre.php';
$offre=new offreC();

//$listeoffre=$offre->afficheroffre();
/*if (isset($_POST['type']))
{
	            $type=$_POST["type"];
				//$promotion1C=new promotionC();
				
				

*/

?>

<!-- html -->
<html>

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
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
                    <a class="nav-link" href="index.html"><?php echo $lang['Home'] ?>
                      <span class="sr-only">(current)</span>
                    </a>
                </li> 

                <li class="nav-item"><a class="nav-link" href="book-table.html"><?php echo $lang['livraison'] ?></a></li>

                <li class="nav-item"><a class="nav-link" href="menu.html"><?php echo $lang['menu'] ?></a></li>

                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $lang['offre'] ?></a>
                    
                    <div class="dropdown-menu">
                    
                      <a class="dropdown-item active" href="Afficheoffre.php"><?php echo $lang['offre'] ?></a>
                      <a class="dropdown-item" href="Ajoutcarte.php"><?php echo $lang['carte'] ?></a>
                    </div>
                </li>
                
                <li class="nav-item"><a class="nav-link" href="contact.html"><?php echo $lang['contact'] ?></a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url(sinda.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4><?php echo $lang['trouver les meilleures offres'] ?> </h4>
              <h2><?php echo $lang['offre'] ?></h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="products">
      <div class="container">
        
               
<hr>
   <table border ='1'  align="center" width="100%" bgcolor="#ffffc4">    <?php foreach($listeoffre as $user) { ?>
    
                  <thead>
				  
          <tr> <th><?php echo $lang['offre'] ?></th>
            <th><?php echo $lang['identifient'] ?></th>
            <th><?php echo $lang['type'] ?></th>
            <th><?php echo $lang['datedeb'] ?></th>
            <th><?php echo $lang['datefin'] ?></th>
            <th><?php echo $lang['pourcentage'] ?></th>
           
          </tr>
          </thead>
                        <tr>
    <td>
    <html>
<a href="blog-details.html" class="services-item-image"><img src="offer.jpg" class="img-fluid" alt=""></a>
    </html>
    </td> 
    <td>
    <?php echo $user['id'] ;?>
    
  </td>
    <td>
    <?php if ($user['type']=="0") { echo "cette offre est valable pour les carte standard"; } elseif($user['type']=="1") {echo "cette offre est valable pour les carte premium";}  ;?>
   </td>
    <td>
    <?php echo $user['datedeb'] ;?>
  </td>
    <td>
    <?php echo $user['datefin'] ;?>
</td>
    <td>
    <?php echo $user['pourcentage']."%" ;?>
  </td>
     </tr>
     <?php } ?>
    
</table>
<h1>scanner ce code pour plus d'info : </h1>
 <?php 


$file =uniqid().".png";
$text ="https://sindahamdi136.wixsite.com/fagito";



QRcode ::png($text,$file);
echo "<center><img src ='".$file."'></center>";

?>       
                        
              

         
            <div class="contact-form">
              <div class="form-group">
                <hr>
                <h5 style="color:red"> ATTENTION : </h5>
               <h5> Ces offres sont seulement accesible que pour les client qui possede une carte de fidelite </h5>
              </div>


                <div class="col-4">
                  <button class="filled-button"><a class="nav-link" href="Ajoutcarte.php">obtenir une carte</a></button>
                </div>
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
  <div class="footer bg-dark">
        <a href="Afficheoffre.php?lang=en"><?php echo $lang['lang_en'] ?></a>
        | <a href="Afficheoffre.php?lang=ar"><?php echo $lang['lang_ar'] ?></a>
    </div>

</html>
