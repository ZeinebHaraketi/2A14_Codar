<?php  
include "../Controller/produitC.php";
include_once '../Model/produit.php';
//include "../Model/produit.php";


$associC=new produitC();
$error = "";
if (
    
    //isset ($_POST["submit"]) &&
    isset($_POST["idC"]) && 
    isset($_POST["nom_produit"]) && 
    isset($_POST["categorie"]) &&
    isset($_POST["prix"]) && 
    isset($_POST["quantite"]) &&
	isset ($_POST['image'])
) {
    if (
	!empty($_POST["idC"]) && 
    !empty($_POST["nom_produit"]) && 
    !empty($_POST["categorie"]) && 
    !empty($_POST["prix"]) && 
    !empty($_POST["quantite"])
	//!empty ($_POST['image'])

    ) {
		
		$image = $_FILES['image'];
	
	$fileName = $_FILES['image']['name'];
	$fileTmpName = $_FILES['image']['tmp_name'];
	$fileSize = $_FILES['image']['size'];
	$fileError = $_FILES['image']['error'];
	$fileType = $_FILES['image']['type'];
	
	$fileExt = explode('.',$fileName);
	$fileActualExt = strtolower(end($fileExt));
	
	$allowed = array('jpg','jpeg','png','jfif','pdf');
	
	if (in_array($fileActualExt, $allowed))
	{
		if ($fileError === 0)
		{
			if ($fileSize < 1000000)
			{
				$fileNameNew = uniqid('',true).".".$fileActualExt;
				$fileDestination = '../View/assets/images/'.$fileNameNew;
				//$fileDestination = '../View/assets/IMG/'.$fileNameNew;
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
		
	
        $associ = new produit(
		$_POST['idC'],
        $_POST['nom_produit'],
        $_POST['categorie'],
        $_POST['prix'],
        $_POST['quantite'],
		$_POST['image']
		//$image 
        );
        $associC->modifierproduit($associ,$_GET['id_produit']);
        
        header('Location:../View/afficher_produit.php');
    } else
        echo "Missing information";
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
                  <p> Stats Produit </p>
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
                <a href="../View/ajouter_produit.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                   
                  <p>Ajouter Produit</p>
                </a>
              </li>
			  
			  <!-- Gestion Categorie -->
			  <li class="nav-item">
                <a href="../View/ajouter_categ.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                   
                  <p>Ajouter Categorie</p>
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
                  <p>Gestion Produit</p>
                </a>
              </li>
			  
			  <!-- Gestion -->
			   <li class="nav-item"> 
                <a href="../View/afficher_categ.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gestion Categorie</p> 
                         
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
                <h3 class="card-title">Modifier Produit</h3>
              </div>
              <!-- /.card-header -->
			   <?php
                if (isset($_GET['id_produit'])) {
                    $associ = $associC->recupererproduit($_GET['id_produit']);
                ?>
              <!-- form start -->
              <form action="" method="POST" enctype="multipart/form-data" name="myform">
			  
			    <!-- Produit-->
                <div class="card-body">

                  <div class="form-group">
                                    <label for="id_produit">id_produit</label>
                                    <input type="int" class="form-control" name="id_produit" id="id_produit" value="<?php echo $associ['id_produit']; ?>">
                                </div>
				  
				  <div class="form-group">
                                    <label for="idC">id_categorie</label>
                                    <input type="int" class="form-control" name="idC" id="idC" value="<?php echo $associ['idC']; ?>">
                                </div>
				  
				  
                  <div class="form-group">
                                    <label for="nom_produit">nom_produit</label>
                                    <input type="string" class="form-control" name="nom_produit" id="nom_produit" value="<?php echo $associ['nom_produit']; ?>">
                                </div>
				  
				  <!-- Categorie-->
				   <div class="form-group">
                                    <label for="categorie">categorie</label>
                                    <input type="string" class="form-control" name="categorie" id="categorie" value="<?php echo $associ['categorie']; ?>">
                                </div>
				  
				  <!-- Prix-->
				  <div class="form-group">
                                    <label for="prix">prix</label>
                                    <input type="float" class="form-control" name="prix" rows="10" value="<?php echo $associ['prix']; ?>" >
                                </div>
				  
				  <!-- Quantité-->
				   <div class="form-group">
                                    <label for="quantite">quantite</label>
                                    <input type="int" class="form-control" name="quantite" value="<?php echo $associ['quantite']; ?>">
                                </div>
		
		
		          
		          <!-- Image -->
				  
				  
				  <div class="row form-group">
                                    <div class="col col-md-3"><label for="file-input" class=" form-control-label">Image</label></div>
                                    <input type="file" id="file-input" name="image" class="form-control-file" value= "<?php echo $associ['image']; ?>">
                     					 </div>
				
				
                <!-- /.card-body -->
                
                 <!--
                <div class="card-footer">
                  <button type="submit" value="envoyer" class="btn btn-primary" onclick="ajout()">Ajouter</button>
				  
                </div>
				-->
				<button type="submit" value="Envoyer" class="btn btn-primary" >Submit</button>
				
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

<?php
                } else {
                    echo "error de chargement";
                }
    ?>

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
