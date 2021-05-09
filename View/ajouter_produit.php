<?php
include "../controller/produitC.php";

//$produit=new produitC();
//$listeproduits=$produit->afficherproduit();


$error = "";

// create produit
$prod= null;
// create an instance of the controller
$prodC= new produitC();


if (
    isset($_POST["idC"]) && 
    isset($_POST["nom_produit"]) && 
    isset($_POST["categorie"]) &&
    isset($_POST["prix"]) && 
    isset($_POST["quantite"]) 
   )
{
  if (
    !empty($_POST["idC"]) && 
    !empty($_POST["nom_produit"]) && 
    !empty($_POST["categorie"]) && 
    !empty($_POST["prix"]) && 
    !empty($_POST["quantite"])
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
				$fileDestination = '../View/assets/images/'.$fileNameNew;
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
	  
	  
	  
    $prod= new produit(
	    $_POST['idC'],
        $_POST['nom_produit'],
        $_POST['categorie'],
        $_POST['prix'],
        $_POST['quantite'],
		$_FILES['image']['name']
		//$_POST['image']
    ); 
    $prodC->ajouterproduit($prod);
    header('Location:afficher_produit.php');
  }
  else
            $error = "Missing information";
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Gestion de Produits</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../View/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../View/assets/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../View/assets/dist/css/adminlte.min.css">
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
        <a href="../../index.html" class="nav-link"><i class="fas fa-home"></i> Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link"><i class="fas fa-phone-alt"></i> Contact</a>
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
    <a href="../View/assets/index.html" class="brand-link">
      <img src="../View/assets/dist/img/LOGO.png" alt="Logo Fagito" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Fagito</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../View/assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Zeineb Haraketi </a>
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
                <a href="../View/assets/index.html" class="nav-link">
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
                <a href="../View/linechart/stat.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Statistiques Produit </p>
                </a>
              </li>
			  
			  
			   <li class="nav-item">
                <a href="../View/linechart/stat_c.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Statistiques Categorie </p>
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
                <a href="../View/assets/forms/ajouter_produit.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                   
                  <p>Ajouter Produit</p>
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
              
              
                <a href="../View/afficher_produit.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mes Tables</p>

                </a>
            
              </li>
              
            </ul>
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
            <h1>Gestion de Produit </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Gestion Produits</li>
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
                <h3 class="card-title">Ajouter Produit</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="ajouter_produit.php" method="POST" enctype="multipart/form-data" name="myform" onsubmit="saisie()">
			  
			    <!-- Produit-->
                <div class="card-body">
				
				  <div class="form-group">
                    <label>Id Categorie</label>
                    <input class="form-control" name="idC" id="idC" placeholder="entrer le nom du produit"  required>
                  </div>

                  <div class="form-group">
                    <label>Nom du Produit</label>
                    <input class="form-control" name="nom_produit" id="nomP" placeholder="entrer le nom du produit"  required>
                  </div>
				  
				  <!-- Categorie-->
				   <div class="form-group">
                    <label>Categorie</label>
                    <input class="form-control" name="categorie"  id="cat" placeholder="entrer la categorie" required>
                  </div>
				  
				  <!-- Prix-->
				   <div class="form-group">
                    <label>prix</label>
                    <input class="form-control" name="prix" id="prix" placeholder="entrer le prix"  required>
                  </div>
				  
				  <!-- Quantité-->
				   <div class="form-group">
                    <label>Quantité</label>
                    <input class="form-control" name="quantite" id="stock" placeholder="entrer la quantité" required>
                  </div>
		
		
		          <!-- Image -->
				  <div class="row form-group">
                                    <div class="col col-md-3"><label for="file-input" class=" form-control-label">Image</label></div>
                                    <input type="file" id="file-input" name="image" class="form-control-file">
                                </div>
				
                <!-- /.card-body -->
                <!--
                <div class="form-group">
                 <button value="verification" class="btn btn-success" onclick="saisie()"> Verifie</button>
                </div>
                 --> 

                <div class="card-footer">
                  <button type="submit" value="envoyer" class="btn btn-primary" onclick="ajout()"><i class="fas fa-plus"></i> Ajouter</button>
				  
                </div>
				
              </form>
			  
            </div>
            <!-- /.card -->

            <script>
			function ajout()
			{
				/*
			  var x= document.forms["myform"]["nomP"].value;
        if (x== "")
        {
           return alert(" Ajout Failed");
        }
        else
        {
          return alert(" Ajout avec succées ! ");
        }
				
			}
			
			function saisie()
			{
				var mot= document.getElementbyId('nomP');
				var mot1= document.getElementbyId('cat');
				var mot2= document.getElementbyId('prix');
				var mot3= document.getElementbyId('stock');
				var test= true;
				
				if (mot == "")
				{
					alert("Un champ n'est pas remplie");
                    test=false;
				}
				else
        {
					if (mot1 == ""){
						alert("Un champ n'est pas remplie");
                        test=false;
					}
					else 
					{
						if (mot2 == "")
						{
					    alert("Un champ n'est pas remplie");
                        test=false;
					    }
					else {
						if (mot3 == ""){
					alert("Un champ n'est pas remplie");
                    test=false;
					
					                   }
				        }
				    }
				
				}
				else
				{
				alert("tous les champs sont remplis ");
				test=true;
				}
			return test;
			}
			</script>
            
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
	  var test= true;
    if (document.myform.nom_produit.value.length == 0)
    {
        alert("champ nom vide !");
		test= false;
    }
    else 
	{
	  if (document.myform.categorie.value.length == 0)
	  {
		  alert("champ categorie vide !"); 
		  test= false;
	  }
	  else
	  {
		 if (document.myform.prix.value.length == 0)
		 {
			 alert("champ prix vide !");
			 test= false;
		 }
		 else
		 {
			 if (document.myform.quantite.value.length == 0)
			 {
				 alert("champ quantite vidde !");
				 test= false;
			 }
		 }
	  }
	}
	else
	{
		alert(" Ajout avec succées ! ");
		test=true;
	}
return test;

  }*/

  
</script>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../View/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../View/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../View/assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../View/assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../View/assets/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
