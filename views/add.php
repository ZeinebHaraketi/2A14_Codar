<?php
    include_once '../Model/Commentaire.php';
    include_once '../Controller/CommentaireC.php';

    include_once '../Controller/blogB.php' ; 
    include_once '../Model/blog.php' ;


    $blogB=new BlogB();
    $listeUsers=$blogB->afficherblog();

    
   // include "afficher_blog.php";
    $blog = new blogB();
    
    if (isset($_POST['idB'])) {
        $blog->affichage_par_id($_POST['idB']);
       // header('Location:../back/afficher_blog.php');
    } else {
        echo 'Erreur : try again';
        echo $_POST['idB'];
    
    }
    


    $error = "";

    // create user
    $commentaire = null;

    // create an instance of the controller
    $commentaireC = new CommentaireC();
    if (
        isset($_POST["NomC"]) && 
        isset($_POST["messageC"])
    ) {
        if (
            !empty($_POST["NomC"]) && 
            !empty($_POST["messageC"])
        ) {
            $commentaire = new Commentaire(
                $_POST['NomC'],
                $_POST['messageC']
            );
            $commentaireC->ajouterCommentaire($commentaire);
            header('Location:afficherCommentaire.php');
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
    <link rel="icon" href="assets/images/favicon.ico">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>PHPJabbers.com | Free Restaurant Website Template</title>

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
                      <a class="dropdown-item active" href="blog.html">Blog</a>
                      <a class="dropdown-item" href="testimonials.html">Testimonials</a>
                    </div>
                </li>
                
                <li class="nav-item"><a class="nav-link" href="contact.html">Contact Us</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-6-1920x500.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4><i class="fa fa-user"></i>John Doe  &nbsp;&nbsp;&nbsp;&nbsp;  <i class="fa fa-calendar"></i> 12/06/2020 10:30   &nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-eye"></i> 114</h4>
              <h2>Lorem ipsum dolor sit amet, consectetur adipisicing</h2>
            </div>
          </div>
        </div>
      </div>
    </div>



<!-- IMAGE  -->  
<br>
<div>
          <img src="assets/images/Sushi-Rolls-Maki-Sushi-–-Hosomaki-1117-I.jpg" >
        </div>
      </div>
    </div>

    <table border=1 align = 'center'>
	

    


    <div class="products">
      <div class="container">
        <div class="row">
            <div class="col-md-12">
              <div class="section-heading">


              
     </div>
            </div>

         

        <br>
        
        

    <div class="send-message">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Leave a Comment</h2>
            </div>
          </div>
          <div class="col-md-8">
            <div class="contact-form">
            <form action="" method="POST">
            <table border="1" align="center">

                <tr>
                    <td>
                        <label for="NomC">Nom:
                        </label>
                    </td>
                    <td><input type="text" name="NomC" id="NomC" maxlength="20"></td>  
                </tr>

                   <tr>
                    <td>
                        <label for="messageC">Message:
                        </label>
                    </td>
                    <td><input type="messageC" name="messageC" id="messageC" ></td>
                </tr>
               
              
                
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Envoyer"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
            </div>
          </div>

          <div class="col-md-4">
              <div class="left-content">

            

                <br> 


                <!-- 
                <ul class="social-icons">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  <li><a href="#"><i class="fa fa-behance"></i></a></li>
                </ul>
              </div>
            </div>
        </div>
      </div>
    </div>
-->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright © 2021 FAGITO </a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>

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