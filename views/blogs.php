<?php
include "../zarga/controller/blogB.php";
$blog=new blogB();
$listeblog=$blog->afficherblog();

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
             <h4>Blogs </h4>    
              <h2>Blog</h2>
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


         <!--       <table id="datatable" class="table table-striped table-bordered" style="width:80%">
                      <thead>
                        <tr>
      
                          <th>Titre</th>
                          <th>descrip</th>
                          <th>Image</th>  
                        </tr>
                      </thead>
                      <tbody>   -->
                        <?php
                        /*
                         require_once"connexion2.php";
                        $conn=se_connecter();
                        $query="select * from blog order by TitreB";
                        


                        if(isset($_GET['search']) AND !empty($_GET['search']))
                        {
                          $search = htmlspecialchars($_GET['search']);
                          $query="select * from blog where TitreB like '%".$search."%' order by idB DESC " ;

                        }
                        $result=$conn->query($query);
                        $data=$result->fetchAll();
                        for($i =0;$i<count($data);$i++)
                        {

                          $idB=$data[$i]["idB"]; 
                          $TitreB=$data[$i]["TitreB"];
                          $DescriptionB=$data[$i]["DescriptionB"];
                          $ImageB=$data[$i]["ImageB"];
     
                      echo"<td>".$TitreB."</td>";
   
                 }  */
             ?>    


                 <!-- AFFICHAGE DE L'image sur l'inferface FONT  -->


        <?php
				  foreach($listeblog as $row){ 

				  ?>
               
            
               <table id="example1" class="table table-striped">
                    <thead>
            
                    <tr>
                        
                    </tr>
                    </thead>
				  
                  <tbody>
                  <td> <?PHP echo '<img src="/CRUD/zarga/back/Admin/'.$row['ImageB'].'" width="200" height="200" />'; ;?>  </td>
                  <!-- <td> <p> <?php //echo $row['TitreB'];?> </p>  </td>  -->



                  <!--
                  <tr>
                  <td>  <a class="btn btn-primary" href="article.php?idB=<?PHP echo $row['idB']; ?>"> More </a>   </td>
          </tr> -->

          
          <td> 
                     <form method="POST" action="article.php">
                       
                     <a class="btn btn-primary" href="article.php?idB=<?PHP echo $row['idB']; ?>"> Show </a>
                                     
                     </td>

          </table>
         
            <?PHP
				      }
		  	         ?>



            <!--   <<a href="add.php" class="services-item-image"><img src="assets/images/Sushi-Rolls-Maki-Sushi-–-Hosomaki-1117-I.jpg" class="img-fluid" alt=""></a> -->

                  <div class="down-content">
                  <a href = "affichier_blog.php?= <?php echo [idB] ?> ;" >
         <!--           <h4><a href="add.php">  <?PHP  // echo"<td><img src=".$ImageB." alt='img' width='50' height='50'></td>";            ?>                    </a></h4>      --> 

                    <!--   <p style="margin: 0;"> John Doe &nbsp;&nbsp;|&nbsp;&nbsp; 12/06/2020 10:30 &nbsp;&nbsp;|&nbsp;&nbsp; 114</p> --> 
                  </div>
                </div>
                </a>
              </div>
               




          

           







              
              
             

              <div class="col-md-12">
                <ul class="pages">
                  <li><a href="#">1</a></li>
                  <li class="active"><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-md-4">
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
              <h5>Lorem ipsum dolor sit amet</h5>
            </div>

          <!--      <p><a href="add.php">Lorem ipsum dolor sit amet, consectetur adipisicing.</a></p>        -->
          </div>
        </div>
      </div>
    </div>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright © 2021 FAGITO </p>
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
