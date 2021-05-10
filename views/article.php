<?php
include "../zarga/Controller/blogB.php";
$blogB=new blogB();
//$listeblog=$blog->affichage_par_id($idB);
if(isset($_POST["idB"]))
{
	$idB=$_POST["idB"];

	if(!empty($idB) && is_numeric($idB))
	{
	   require_once"connexion.php";
       $conn=se_connecter();
       $query="SELECT * FROM blog WHERE idB=$idB";
       $conn->exec($query);
       

     
	}
         
}

?>


<!DOCTYPE html >
<html lang="en">

  <head>

    <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/favicon.ico">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>FAGITO</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

<!-- STYLE -->
<style>
footer {
  text-align: center;
  padding: 3px;
  background-color: DarkSalmon;
  color: white;
}
</style>




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
          <a class="navbar-brand" href="index.html"><h2>Restaurant <em>Website</em></h2></a>
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

                <li class="nav-item"><a class="nav-link" href="book-table.html">Book A Table</a></li>

                <li class="nav-item"><a class="nav-link" href="menu.html">Menu</a></li>

                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">More</a>
                    
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="about-us.html">About Us</a>
                      <a class="dropdown-item active" href="blogs.php">Blog</a>
                      <a class="dropdown-item" href="testimonials.html">Testimonials</a>
                    </div>
                </li>
                
                <li class="nav-item"><a class="nav-link" href="contact.html">Contact Us</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>



    <?php
                if (isset($_GET['idB'])) {
                    $user = $blogB->recupererblog($_GET['idB']);
                ?>








    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-6-1920x500.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
             <h4>Article Title </h4>    
              <h2><?php echo $user['TitreB']; ?> </h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="products">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="row">
              <div class="col-md-6">
                <div class="service-item">

               

<?PHP
		      }
		  	         ?>



      <!--      <div class="down-content">
                
    

                    
                </div>
              </div>
              </a>
            </div>
             
        

              <div class="col-md-12">
                <ul class="pages">
             
                 
                </ul>
              </div>
            </div>                  
          </div>                -->

    <!--  <div class="col-md-4">
            <div class="contact-form">
              <div class="form-group">
                <h5>Blog Search</h5>
              </div>

              <div class="row">
                <div class="col-8">
                  <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon2">
                </div>

                <div class="col-4">
                  <button class="filled-button" type="button">Go</button>
                </div>
              </div>
            </div> 

            <div class="form-group">
              <h5>Affichage des articles </h5>
            </div>
          </div>
        </div>
      </div>
    </div>   -->
    


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
          
    


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>



    

  </body>

</html>
