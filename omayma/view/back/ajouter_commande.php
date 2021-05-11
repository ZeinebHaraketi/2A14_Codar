<?php
include "C:/xampp1/htdocs/omayma/controller/commandeC.php";

//$commande=new commandeC();
//$listecommandes=$commande->affichercommande();


$error = "";

// create commande
$commande= null;
// create an instance of the controller
$commandeC= new commandeC();



if (
    
    isset($_POST["description"]) &&

    isset($_POST["nom"]) &&
    isset($_POST["prix"]) 
    
   )
{
  if (
  
    !empty($_POST["description"]) && 
   
    !empty($_POST["nom"])&&
    !empty($_POST["prix"])
    
     )
     {
     $image = $_FILES['image'];
	
	//$fileName = $_FILES['file']['name'];
	$image = $_FILES['image']['name'];
	$fileTmpName = $_FILES['image']['tmp_name'];
	$fileSize = $_FILES['image']['size'];
	$fileError = $_FILES['image']['error'];
	$fileType = $_FILES['image']['type'];
	
	//$fileExt = explode('.',$fileName);
	$fileExt = explode('.',$image);
	$fileActualExt = strtolower(end($fileExt));
	
	$allowed = array('jpg','jpeg','png');
	
	if (in_array($fileActualExt, $allowed))
	{
		if ($fileError === 0)
		{
			if ($fileSize < 1000000)
			{
				$fileNameNew = uniqid('',true).".".$fileActualExt;
				$fileDestination = '../assets/image/'.$fileNameNew;
				move_uploaded_file($fileTmpName,$fileDestination);
				echo "image uploaded with success !";
			}
			else 
			{
				echo "your file  is too big !";
			}
		}
		else 
		{
			echo "There was an error uploading your file !";
		}
	}else 
	{
		echo "you cannot upload files of this type !";
	}
  
  
  
  
    $commande = new commande(
        $_FILES['image']['name'],
        $_POST['description'],
        $_POST['nom'],
        $_POST['prix']
    ); 
    $commandeC->ajoutercommande($commande);
    header('Location:afficher_commande.php');
  }

  else
  
            $error = "Missing information";
  
}

//2
/*
$error = "";

// create article
$commande = null;

// create an instance of the controller
$commandeC = new commandeC();
if (
    isset($_POST["image_plat"]) &&
    isset($_POST["description"]) &&
    isset($_POST["nom"]) &&
    isset($_POST["nom"]) 

) {

    if (
        !empty($_POST["image_plat"]) &&
        !empty($_POST["description"]) &&
        !empty($_POST["nom"]) &&
        !empty($_POST["nom"]) 

    ) {
        $commande = new commande(
            $_POST['image_plat'],
            $_POST['description'],
            $_POST['nom'],
            $_POST['nom']
            

        );
        $commandeC->ajoutercommande($commande);
        header('Location:afficher_commande.php');
       // header('Location:../front/blogs.php');
    } else
        echo "Missing information";
        
}

*/



?>

<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Gestion de commandes</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css">
</head>


<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">

              
                <button class="btn btn-navbar" type="submit"  value="submit" onclick="test()">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

     
         
         
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../assets/index.html" class="brand-link">
      <img src="../assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Fagito</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Omayma Hadriche </a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                PlateForme Generale
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../assets/index.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ma PlateForme</p>
                </a>
              </li>
              
            </ul>
          </li>
          
        
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Statistiques 
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../assets/charts/chartjs.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Stats commande </p>
                </a>
              </li>
              
            </ul>
          </li>
		  
          
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Mon Travail
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../assets/forms/ajouter_commande.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                   
                  <p>Ajouter commande</p>
                </a>
              </li>
          
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../assets/forms/modifier_commande.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                   
                  <p>Modifier commande</p>
                </a>
              </li>
          
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../assets/forms/ajouter_commande.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                   
                  <p>Supprimer commande</p>
                </a>
              </li>
          
            </ul>

          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tables
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
              
              
                <a href="../View/afficher_commande.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mes Tables</p>

                </a>
            
              </li>
              
            </ul>
          </li>
          <li class="nav-header">Metiers</li>
          <li class="nav-item">
            <a href="../assets/calendar.html" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Calendar
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="../assets/kanban.html" class="nav-link">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Planning
              </p>
            </a>
          </li>
          
		  
		  
		  <!--
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Pages
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              
              <li class="nav-item">
                <a href="../examples/projects.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Projects</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/project-add.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/project-edit.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Edit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/project-detail.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Detail</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/contacts.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contacts</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/faq.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>FAQ</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/contact-us.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contact us</p>
                </a>
              </li>
            </ul>
          </li>
		  -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Autres Fonctions 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Login & Register 
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="../assets/examples/login.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Login </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../assets/examples/register.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Register </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../assets/examples/forgot-password.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Forgot Password </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../assets/examples/recover-password.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Recover Password </p>
                    </a>
                  </li>
                </ul>
              </li>
              
              
              
              <li class="nav-item">
                <a href="../examples/language-menu.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Language Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../assets/examples/404.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Error 404</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../assets/examples/500.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Error 500</p>
                </a>
              </li>
              
              
            </ul>
          </li>
		  
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-search"></i>
              <p>
                Search
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="../search/enhanced.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Enhanced</p>
                </a>
              </li>
            </ul>
          </li>
          
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Gestion de commande </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Gestion commandes</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


    
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Ajouter commande</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="ajouter_commande.php" method="POST" enctype="multipart/form-data" name="myform">
			  

			    <!-- image-->
                <!-- Image -->
				  <div class="row form-group">
                                    <div class="col col-md-3"><label for="file-input" class=" form-control-label">Image</label></div>
                                    <input type="file" id="file-input" name="image" class="form-control-file">
                                </div>
                                
				  <!-- description-->
				   <div class="form-group">
                    <label>description</label>
                    <input class="form-control" name="description"  id="description" placeholder="entrer la description" required>
                  </div>
				  
				  <!-- nom-->
				   <div class="form-group">
                    <label>nom</label>
                    <input class="form-control" name="nom" id="nom" placeholder="entrer la nom" required>
                  </div>

                  <!-- prix-->
				   <div class="form-group">
                    <label>prix</label>
                    <input class="form-control" name="prix" id="prix" placeholder="entrer la prix" required>
                  </div>

               
				  
                 <!-- <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
					
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
					  
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
					  
                    </div>
					
                  </div>
				  -->
				  
				  <!--
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
				  
                </div>
				-->
                <!-- /.card-body -->
                
                <div class="card-footer">
                  <button type="submit" value="envoyer" class="btn btn-primary">Ajouter</button>
                </div>
				
        
              </form>
			  
            </div>
            <!-- /.card -->


            
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    
  </div>

<script type="text/javascript">
  function test()
  {
    if (document.myform.image.value.length == 0)
    {
        alert("veuillez remplir le champ");
    }
    if (document.myform.description.value.length == 0)
    {
        alert("veuillez remplir le champ");
    }
    if (document.myform.nom.value.length == 0)
    {
        alert("veuillez remplir le champ");
    }
    if (document.myform.prix.value.length == 0)
    {
        alert("veuillez remplir le champ");
    }
    if (document.myform.mail.value.length == 0)
    {
        alert("veuillez remplir le champ");
    }


  }
  
</script>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../assets/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>